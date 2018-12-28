<title>Volts</title>
<link rel="shortcut icon" href="{{asset('images/title_bar.png')}}" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<script>
var API_BASE_URL = "{{ env('APP_BASE_URL') }}";
</script>
<style>
@import url('https://fonts.googleapis.com/css?family=Nunito');
@import url('https://fonts.googleapis.com/css?family=Playfair+Display');
body {
	font-size: 14px;
	font-weight: 400;
	color: white;
	-webkit-font-smoothing: antialiased;
	font-smoothing: antialiased;
	background: url("{{ asset('images/or-bang-bg-2.jpeg') }}");
	background-size: 100%;
	background-position: 0% 30%;
}
.title{
	text-align: right;
	font-family:"Playfair Display", Helvetica, Arial, sans-serif;
	font-weight: bold;
	font-size: 2em;
	float: right;
	margin-left: 60%;
	padding-left: 8%;
	margin-top: 8%;
}
.content{
	font-family:"Nunito", Helvetica, Arial, sans-serif;
	margin: auto;
	width: 100%;
	text-align: center;
	font-size: 1.5em;
}
h1 {
	font-size: 2em;
	font-weight: bolder;
}
section {
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
	<section>
		<div class="wrapper">
			<img class="logo" src="{{asset('images/logo-wb.png')}}">
			<div class="title"> VOLTS Bengaluru<br><br> BMS College of Engineering,<br> Bull Temple Road, Bengaluru <br><br> 26th and 27th January 2019</div>
		</div>
	</section>
	<section>
		<div class="content">
			
		</div>
	</section>
</div>