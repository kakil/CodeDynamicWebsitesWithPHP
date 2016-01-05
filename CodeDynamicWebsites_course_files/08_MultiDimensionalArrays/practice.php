<?php
	
	// Constants
	define("Title", "MultiDimensional Arrays");
	
	// Custom Variables
	$lessonNumber = 8;
	$myName = "Kitwana";
	
	date_default_timezone_set('UTC');

	
	// Moustache Multi-Dimensional Array
	$moustache = array(
		
		array(
			name => "Handlebar",
			creepFactor => "High",
			avgGrowthInDays => 14
		),
		
		array(
			name => "Salvador Dali",
			creepFactor => "Extreme",
			avgGrowthInDays => 60
		),
		
		array(
			name => "Goatee",
			creepFactor => "Low",
			avgGrowthInDays => 3
		)
	);

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
				<h2>The <?php echo $moustache[0][name]; ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $moustache[0][creepFactor]; ?></strong> and takes <strong><?php echo($moustache[0][avgGrowthInDays]); ?> days</strong> to grow on average.</strong></p>
				
				<h2>The <?php echo $moustache[1][name]; ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $moustache[1][creepFactor]; ?></strong> and takes <strong><?php echo($moustache[1][avgGrowthInDays]); ?> days</strong> to grow on average.</strong></p>
				
				<h2>The <?php echo $moustache[2][name]; ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $moustache[2][creepFactor]; ?></strong> and takes <strong><?php echo($moustache[2][avgGrowthInDays]); ?> days</strong> to grow on average.</strong></p>
				
				<!-- REPEAT ABOVE 2X -->
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<!-- YEAR --> - <!-- YOUR NAME --></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
