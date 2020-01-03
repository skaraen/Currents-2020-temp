var canvas = document.getElementById('canvas-element');
var ctx = canvas.getContext('2d');
var countDownDate = new Date('Feb 14, 2020 12:00:00');

function deg2rad(degree) {
	var factor = Math.PI / 180;
	return factor * degree;
}

function clamp(x, min, max) {
	if (x < min) return min;
	else if (x > max) return max;
	else return x;
}

function between(x, min, max) {
	return x >= min && x <= max;
}

var drawClock = setInterval(function() {
	canvas.width = canvas.parentElement.clientWidth;
	canvas.height = canvas.parentElement.clientHeight;
	ctx.strokeStyle = '#ffffff';
	ctx.lineWidth = 15;
	ctx.lineCap = 'round';
	ctx.shadowBlur = 15;
	ctx.shadowColor = '#ffffff';

	var now = new Date().getTime();
	var timeLeft = countDownDate - now;

	if (timeLeft <= 0) {
		clearInterval(drawClock);
	}

	var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
	var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
	var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
	var millseconds = timeLeft % 1000;
	var min, max, xpos, ypos, radius, flag;

	ctx.clearRect(0, 0, canvas.width, canvas.height);
	if (canvas.width >= canvas.height) {
		min = canvas.height;
		max = canvas.width;
		xpos = 0.75 * max;
		ypos = 0.5 * min;
		flag = 0;
	} else {
		min = canvas.width;
		max = canvas.height;
		xpos = 0.5 * min;
		ypos = 0.75 * max;
		flag = 1;
	}

	if (max / 2 >= min) {
		radius = min;
	} else {
		radius = max / 2;
	}

	var cwidth = canvas.width;

	var fontSize = clamp(30 - 5 * ((720 - radius) / 120), 12, 30);
	if (between(fontSize, 15, 25)) {
		ctx.lineWidth = 10;
	} else if (between(fontSize, 10, 14)) {
		ctx.lineWidth = 8;
	}

	//Days
	ctx.beginPath();
	ctx.arc(xpos, ypos, 0.4 * radius, deg2rad(270), deg2rad((days + hours / 24) / 50 * 360 - 90));
	ctx.stroke();

	//Hours
	ctx.beginPath();
	ctx.arc(xpos, ypos, 0.35 * radius, deg2rad(270), deg2rad((hours + minutes / 60) / 24 * 360 - 90));
	ctx.stroke();

	//Minutes
	ctx.beginPath();
	ctx.arc(xpos, ypos, 0.3 * radius, deg2rad(270), deg2rad((minutes + seconds / 60) / 60 * 360 - 90));
	ctx.stroke();

	//Seconds
	ctx.beginPath();
	ctx.arc(xpos, ypos, 0.25 * radius, deg2rad(270), deg2rad((seconds + millseconds / 1000) / 60 * 360 - 90));
	ctx.stroke();

	//Font
	days = ('0' + days).slice(-2);
	hours = ('0' + hours).slice(-2);
	minutes = ('0' + minutes).slice(-2);
	seconds = ('0' + seconds).slice(-2);

	var text = days + 'd ' + hours + 'h ' + minutes + 'm ' + seconds + 's to go...';
	ctx.font = fontSize + 'px Raleway';
	ctx.fillStyle = '#ffffff';

	if (radius <= 265) {
		text = days + 'd ' + hours + 'h ' + minutes + 'm ' + seconds + 's';
		xpos = xpos - 0.2 * radius;
	} else {
		xpos = xpos - 0.22 * radius;
	}

	ctx.fillText(text, xpos, ypos);
}, 10);
