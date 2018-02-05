<!DOCTYPE HTML>
<html lang="pl">

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<title>Accelerometer</title>	
		<link rel="stylesheet" href="style.css" type="text/css" />
		<script src="updateLayout.php"></script>
	</head>
	
	<body onload="update();">
		<div id="container">
			<div id="clocks">
			
				<div class="clock">				
					<img src="img/clockFace.png"/>
					<img src="img/arrow.png" class="arrow" id="arrow1"/>
					<div class="value" id="value1">5</div>
					<img src="img/slider.png" class="slider"/>
					<img src="img/pointer.png" class="pointer" id="pointer1"/>
				</div>

				<div class="clock">
					<img src="img/clockFace.png"/>					
					<img src="img/arrow.png" class="arrow" id="arrow2"/>
					<div class="value" id="value2">-10</div>
					<img src="img/slider.png"/>
					<img src="img/pointer.png" class="pointer" id="pointer2"/>
				</div>
				
				<div style="clear:both;"></div>			
			</div>
		</div>
	</body>		
	
</html>
