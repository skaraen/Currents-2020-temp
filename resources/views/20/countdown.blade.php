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
		<link rel="stylesheet" type="text/css" media="screen" href="css/countdown.css" />
	</head>
	<body>
			<div id='screen-container' class="fillParent">
        		<div class='header'>
            		<div id='links-container' class="fillParent">
						<a href="/">Home</a>
						<a href="eureka">Eureka</a>
						<a href="volts">Volts</a>
						<a href="cca">Campus Ambassador</a>
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