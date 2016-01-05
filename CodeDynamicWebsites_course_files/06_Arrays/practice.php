<?php
	
	// Constants
	define("Title", "Arrays");
	
	// Custom Variables
	$lessonNumber = "6";
	$myName = "Kitwana";
	date_default_timezone_set('UTC');
	$year = date('Y');
	
	// Moustache Array
	$mustaches = array('handlebar', 'Fu Man Chu', 'Mine');
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title><!-- PAGE TITLE --></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Lecture <?php echo($lessonNumber); ?>: <small><?php echo(Title); ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
			
				<h2>Moustache Types</h2>
				<ul>
					<li><?php echo $mustaches[0]; ?></li>
					<li><?php echo $mustaches[1]; ?></li>
					<li><?php echo $mustaches[2]; ?></li>
				</ul>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo $year ?> - <?php echo $myName ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
