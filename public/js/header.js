function open_side_nav() {
    document.getElementById("side_nav").style.width="290px";
    document.getElementById("main").style.marginLeft="-290px";
    document.getElementsByClassName("header")[0].style.left="-250px";
    document.getElementById("menu_icon").style.opacity="0";
}

function close_side_nav() {
    document.getElementById("side_nav").style.width="0px";
    document.getElementById("main").style.marginLeft="0px";
    document.getElementsByClassName("header")[0].style.left="0";
    document.getElementById("menu_icon").style.opacity="1";
}

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
    document.getElementsByClassName("header")[0].style.position = "fixed";
  } else {
    document.getElementsByClassName("header")[0].style.position = "absolute";
  }
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementsByClassName("header")[0].style.background = "#414141";
  } else {
    document.getElementsByClassName("header")[0].style.background = "transparent";
  }
}