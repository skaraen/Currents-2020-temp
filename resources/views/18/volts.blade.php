<title>VOLTS Outreach</title>
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
	height: 15%;
	width: auto;
	float: left;
}

.content img {
	height: 40%;
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

html{scroll-behavior:smooth}

@media only screen and (max-width: 600px) {
	.title {
		text-align: center;
		font-size: 6em;
		padding: 1%;
		margin-top: 30px;
	}
	img {
		height: 5%;
		width: auto;
		margin-left: 50%;
	}
	.content{
		font-family:"Nunito", Helvetica, Arial, sans-serif;
		width: 80%;
		margin: auto;
		font-size: 1.5em;
	}
	section {
		width: 120%;
		padding: 15%;
		line-height: 40px;
	}
}
</style>
<div class="container">
	<div class="wrapper">
		<!--<img class="logo" src="{{asset('images/logo-wb.png')}}">-->
		<div class="title"> VOLTS Outreach</div>
	</div>
	<div class="content">
		<a href="{{ env('APP_BASE_URL') }}/volts/bangalore"><img class="img-link" src="{{asset('images/or-bang.jpeg')}}"></a>
		<a href="#"><img class="img-link" src="{{asset('images/or-kochi.jpeg')}}"></a>
	</div>
</div>