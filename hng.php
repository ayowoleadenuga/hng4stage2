<!DOCTYPE html>
<html>
<head>
	<title>HNG Stage 1</title>
	<link rel="stylesheet" type="text/css" href="hngstyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<div class="row imageBg">
			<div class="row imageBackground" >
				<img class="image-responsive bg" src="image.jpg">
			</div>
		</div>
		<div class="content">
			<div class="text-center content1">
				<h1>HELLO HNG</h1>
			</div>
			<br>
			<div class="text-center content2">
				<h2>Current Time is 
<?php
echo date("h:i:sa");
echo date("Y-m-d");
?>
				</h2>
			</div>
		</div>
	</div>
</body>
</html>