<!-- php for "Novay Technologies" © 2017, authors: "Daniel J Dunevant , Jesse Primiani" -->

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
		<meta charset="UTF-8" />
		<meta name = "viewport" content="width=device-width,initial-scale=1" />
		<meta name="author" content="Novay Technologies" />
		<title>Novay Technologies</title>
		<?php require'headerBackend.php'; ?>
	</head>
	<body>
		<div class = "row">
			<div class='Header col-xs-12 col-sm-12 col-md-12'>
			<?php require 'headerFrontend.php'; ?>
			</div>
		</div>
		
		<div class = "container-fluid">	
			<div class="row">
				<div class="main col-xs-12 col-sm-12 col-md-6" >
				<?php require 'main.php'; ?>
				</div>
			</div>
		</div>	
		
		<div class ="row">
			<div class='footerUpper col-xs-12 col-sm-12 col-md-12 '>
				<?php require "footer.php"; ?>
			</div>
		</div>
	</body>
</html>
