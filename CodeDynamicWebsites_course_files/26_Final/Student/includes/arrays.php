<?php
	
	//Nav Menu Items
	
	$navItems = array (
	
		array(
			slug 	=> "index.php",
			title 	=> "Home"
		),
		array(
			slug 	=> "team.php",
			title 	=> "Team"
		),
		array(
			slug 	=> "menu.php",
			title 	=> "Menu"
		),
		array(
			slug 	=> "contact.php",
			title 	=> "Contact"
		),
		
	);
	
	//Store Hours
	
	$hours = array (
		
		'mon' => array('13:00-21:00'),
		'tue' => array('13:00-21:00'),
		'wed' => array('13:00-21:00'),
		'thu' => array('13:00-21:00'),
		'fri' => array('16:00-23:00'),
		'sat' => array('16:00-23:00'),
		'sun' => array(''),
		
	);
	
	$template = array(
	
		'open' 				=> "<strong class='open'>We're open!</strong>",
		'closed' 			=> "<strong class='closed'>Sorry, we're closed.</strong>",
		'closed_all_day' 	=> "<strong class='closed'>Sorry, we're closed today.</strong>",
		'separator' 		=> " - ",
		'join' 				=> " and ",
		'format' 			=> "g:ia",
		'hours' 			=> "{%open%}{%separator%}{%closed%}",	
	);
						
						
?>













