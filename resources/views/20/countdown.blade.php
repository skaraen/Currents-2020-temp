<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="images/title_bar.png">
		<title>Currents' 20</title>
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<!-- Styles -->
		<!-- <style>
		html, body, .fillParent {
    		height: 100%;
    		width: 100%;
			overflow: hidden;
		}

		.header, .footer{
    		height:50px;
		}

		.middle{
    		height:calc(100% - 100px);
		}

		#links-container > a {
			height:50px; 
			width:100%;	
			font-family: 'Raleway', sans-serif;	
			color: white;
			padding: 0px 20px 0px 30px;
			font-size: 20px;
			font-weight: 600;
			letter-spacing: .5rem;
			text-decoration: none;
			text-transform: uppercase;
		}

		#links-container {
			/* border: white dotted 2px; */
			padding-top: 10px;
		}

		body {
			background: url('../images/Currents20_files/countdown_bg.png');
			background-size: 100% 101%;
			background-repeat: no-repeat;
		}
		
		@media screen and (max-width: 500px) {
  		body {
		background : url('images/Currents20_files/countdown_bg_mob.png');
		background-size : 105% 105%;
		background-repeat : no-repeat;
		}

		#links-container > a {
			height:50px; 
			width:100%;	
			font-family: 'Raleway', sans-serif;	
			color: white;
			padding: 0px 20px 0px 30px;
			font-size: 15px;
			font-weight: 600;
			letter-spacing: .5rem;
			text-decoration: none;
			text-transform: uppercase;
		}
		}
		</style> -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/countdown.css" />
	</head>
	<body>
			<div id='screen-container' class="fillParent">
        		<div class='header'>
            		<div id='links-container' class="fillParent">
						<a href="/">Home</a>
						<a href="eureka">Eureka</a>
						<a href="volts">Volts</a>
						<a href="tronicals">Tronicals</a>
						<a href="workshops">Workshops</a>
					</div>
        		</div>
        		<div class='middle'>
            		<div class="fillParent">
               			<canvas id="canvas-element" class="fillParent" width="100" height="100">
                    		Your browser is not compatible with HTML5 canvas.
                		</canvas>
            		</div>
        		</div>
				<div class='footer'>
            		<div></div>
        		</div>
    		</div>
    <script type='text/javascript' src='js/countdown.js'></script>
	</body>
</html>