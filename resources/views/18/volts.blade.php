<title>VOLTS</title>
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
	font-family:"Chakra Petch", Helvetica, Arial, sans-serif;
	font-size: 14px;
	font-weight: 400;
	color: white;
	-webkit-font-smoothing: antialiased;
	font-smoothing: antialiased;
	background: url("{{ asset('images/volts-bg.jpeg') }}");
	background-size: cover;
}
.title{
	text-align: center;
	font-weight: bold;
	font-size: 5em;
	padding: 2%;
	margin: auto;
}
.content{
	font-family:"Nunito", Helvetica, Arial, sans-serif;
	margin: auto;
	width: 70%;
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
	height: 20%;
}
.content img {
	height: 70%;
	padding: 5%;
	width: auto;
	text-align: center;
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
	height: 20%;
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
<img class="logo left" src="{{asset('images/logo-wb.png')}}">
<div class="container">
	<div class="wrapper">
		<div class="title">
			<img class="logo" src="{{asset('images/volts_logo-wb.png')}}">
		</div>
	</div>
	<div class="content">
		<a href="{{ env('APP_BASE_URL') }}/volts/bangalore"><img class="img-link" src="{{asset('images/or-bang.jpeg')}}"></a>
		<a href="{{ env('APP_BASE_URL') }}/volts/kochi"><img class="img-link" src="{{asset('images/or-kochi.jpeg')}}"></a>
	</div>
</div>