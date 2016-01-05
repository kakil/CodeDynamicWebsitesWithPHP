<?php
	
	// Define a Constant
	define("Title", "Variables and Constants");
	
	// Your Variables
	date_default_timezone_set('UTC');
	
	$today = date("F j, Y");
	$myName = "Kitwana Akil";
	define("myFavoriteColor", "Red");

	/*
	Use PHP to calculate the difference
	between your birth year and this year
	to show your age dynamically
	*/
	$thisYear = date("Y") + 0;
	$myBirthYear = 1969;
	$myAge = $thisYear - $myBirthYear;
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Get Your Hands Dirty: <!-- PAGE TITLE --></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><?php echo Title ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<h3>Today's Date:</h3>
				<p><?php echo $today ?></p>
				
				<h3>My Name:</h3>
				<p><?php echo $myName ?></p>
				
				<h3>My Favourite Colour:</h3>
				<p><?php echo myFavoriteColor ?></p>
				
				<h3>My Age:</h3>
				<p><?php echo $myAge ?></p>
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the final example</a>
			
			<hr>
			
			<small>&copy;<?php echo $thisYear ?> - <?php echo $myName ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
