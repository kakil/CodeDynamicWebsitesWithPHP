<?php
	
	// Constants
	define("Title", "Associative Arrays");
	
	// Custom Variables
	$lessonNumber = "7";
	
	
	// Moustache Associative Array
	$moustache = array(
		
		"name" => "Goatee",
		"creepFactor" => "1",
		"daysGrowth" => "3"	
	);
	
	date_default_timezone_set('UTC');
	$year = date('Y');
	
	$myName = "Kitwana";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo(Title); ?></title>
		<link href="/assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo($lessonNumber); ?>: <small><?php echo(Title); ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
			
				<h2>The <?php echo $moustache["name"]; ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $moustache["creepFactor"]; ?></strong> and takes <strong><?php echo($moustache["daysGrowth"]); ?> days</strong> to grow on average.</strong></p>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo($year); ?> - <?php echo($myName); ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
