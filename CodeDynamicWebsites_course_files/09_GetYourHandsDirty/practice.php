<?php

	// Constants
	define("Title", "Arrays");
	
	date_default_timezone_set('UTC');

	// Variables
	$year = date('Y');
	$my_name = "Kitwana";
	
	
	// Arrays
	$age_group = array( "child", "teenager", "adult");
	$people = array(
		
		array(
			name => "Carter",
			country => "Canada",
			moustache => "Handlebar",
			color => "black"
		),
		
		array(
			name => "Rodrigo",
			country => "Uruguay",
			moustache => "Goatee",
			color => "red"
		),
		
		array(
			name => "Giovanni",
			country => "Italy",
			moustache => "Salvador Dali",
			color => "blonde"
		)
		
	);
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Get Your Hands Dirty: <?php echo(Title); ?></title>
		<link href="/assets/styles.css" rel="stylesheet">
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shCore.js"></script>
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shBrushPhp.js"></script>
		<link type="text/css" rel="stylesheet" href="/assets/syntaxhighlighter/styles/shCoreDefault.css"/>
		<script type="text/javascript">SyntaxHighlighter.all();</script>
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><?php echo(Title); ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3><?php echo($people[0][name]); ?> from <?php echo($people[0][country]); ?></h3>
				<p><strong><?php echo($people[0][name]); ?></strong> is quite the <strong><?php echo $age_group[2]; ?>!</strong> He sports a solid <strong><?php echo($people[0][moustache]); ?></strong> that is <strong><?php echo($people[0][color]); ?></strong> in color.</p>
				
				<h3><?php echo($people[1][name]); ?> from <?php echo($people[1][country]); ?></h3>
				<p><strong><?php echo($people[1][name]); ?></strong> is quite the <strong><?php echo $age_group[1]; ?>!</strong> He sports a solid <strong><?php echo($people[1][moustache]); ?></strong> that is <strong><?php echo($people[1][color]); ?></strong> in color.</p>
				
				<h3><?php echo($people[2][name]); ?> from <?php echo($people[2][country]); ?></h3>
				<p><strong><?php echo($people[2][name]); ?></strong> is quite the <strong><?php echo $age_group[0]; ?>!</strong> He sports a solid <strong><?php echo($people[2][moustache]); ?></strong> that is <strong><?php echo($people[2][color]); ?></strong> in color.</p>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the final example</a>
			
			<div class="navs cf">
				<a href="" class="button prev">Previous Lecture</a>
				<a href="" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo($my_name); ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
