<title>VOLTS</title>
<link rel="shortcut icon" href="{{ asset('images/title_bar.png') }}" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<script>
var API_BASE_URL = "{{ env('APP_BASE_URL') }}";
</script>
<style>
@import url('https://fonts.googleapis.com/css?family=Chakra+Petch');
@import url('https://fonts.googleapis.com/css?family=Nunito');
body {
	font-family:"Nunito", Helvetica, Arial, sans-serif;
	font-size: 14px;
	font-weight: 400;
	color: white;
	-webkit-font-smoothing: antialiased;
	font-smoothing: antialiased;
	background: url("{{ asset('images/volts-bg.jpeg') }}");
	background-size: cover;
}
.title{
	font-weight: bold;
	font-size: 5em;
	padding: 1%;
	padding-left: 45%;
	margin: a;
	background-color: rgba(242, 244, 230, 0.6);
}
.content{
	font-family:"Nunito", Helvetica, Arial, sans-serif;
	margin: auto;
	width: 90%;
	text-align: center;
	font-size: 1.5em;
}
.button {
	background-color: #f44336;
	border: none;
	color: white;
	padding: 1% 2%;
	text-align: center;
	display: block;
	cursor: pointer;
	font-size: 2em;
	margin: auto;
	width: 30%;
}
h1 {
	font-size: 2em;
	font-weight: bolder;
}
section {
	padding: 10%;
	line-height: 40px;
}
.logo {
	height: 8%;
}
.content img {
	height: 60%;
	padding: 5%;
	width: auto;
	text-align: center;
}
.smaller {
	height: 50% !important;
	padding: 4% !important;
}
.img-link {
	transition: all .5s;
	opacity: 0.85;
}
.img-link:hover{
	transform: scale(1.1);
	opacity: 1;
}
.left {
	float: left;
	height: 13%;
}
html{scroll-behavior:smooth}
@media only screen and (max-width: 600px) {
	body {
		font-family:"Chakra Petch", Helvetica, Arial, sans-serif;
		font-size: 14px;
		font-weight: 400;
		color: white;
		-webkit-font-smoothing: antialiased;
		font-smoothing: antialiased;
		background: url("{{ asset('images/volts-bg.jpeg') }}");
		background-size: 100%;
	}
	.content img {
		height: 30%;
		padding: 5%;
		width: auto;
		text-align: center;
	}
	.logo {
		height: 5%;
	}
	.content{
		font-family:"Nunito", Helvetica, Arial, sans-serif;
		font-size: 1.5em;
	}
}
</style>
<a href="https://www.facebook.com/currentsnitt"><img class="logo left" src="{{asset('images/logo-bw.png')}}"></a>
<div class="wrapper">
		<div class="title">
			<img class="logo" src="{{asset('images/volts_logo-bw.png')}}">
		</div>
	</div>
<div class="container">
	<div class="content">
		<a href="{{ env('APP_BASE_URL') }}/volts/bengaluru"><img class="img-link" src="{{asset('images/blore-round.png')}}"></a>
		<a href="{{ env('APP_BASE_URL') }}/volts/kochi"><img class="img-link" src="{{asset('images/kochi-round.png')}}"></a>
		<div class="second">
			<div style="font-family: 'Chakra Petch';font-size: 1.5em; padding: 3%; color: #ffff99; font-weight: bolder">REGISTER BELOW FOR MOCK GATE EXAMINATIONS</div>
			<a href="{{ env('APP_BASE_URL') }}/volts/trichy"><img class="img-link smaller" src="{{asset('images/trichy-round.png')}}"></a>
			<a href="{{ env('APP_BASE_URL') }}/volts/tirunelveli"><img class="img-link smaller" src="{{asset('images/tirunelveli-round.png')}}"></a>
			<br>
			<a href="{{ env('APP_BASE_URL') }}/volts/salem"><img class="img-link smaller" src="{{asset('images/salem-round.png')}}"></a>
			<a href="{{ env('APP_BASE_URL') }}/volts/madurai"><img class="img-link smaller" src="{{asset('images/madurai-round.png')}}"></a>
		</div>

	</div>
</div>