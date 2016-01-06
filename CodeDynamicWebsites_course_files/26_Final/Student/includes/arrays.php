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
			
			
	//Team Members
	
	$teamMembers = array(
		
		array(
			name 	=> "Frankie III",
			position	=> "Owner",
			bio			=> "Frankie is the great-grandson of the original Franklin.  He is the owner of Franklin's Fine Dining.  He cooks a mean fritatta!",
			img			=> "frankie"	
		),
		array(
			name 	=> "Francis",
			position	=> "General Manager",
			bio			=> "Francis knows her stuff.  The big sister of Frankie himself, she runs the show.  Don't miss her Margherita Mondays!",
			img			=> "francis"	
		),
		array(
			name 	=> "Carlos",
			position	=> "Head Chef",
			bio			=> "Carlos is the epitome of the phrase &ldquo;Don't judge a book by it's cover&rdquo; You simply cannot find a better chef.",
			img			=> "carlos"	
		),
		
	);	
	
	
	// Menu Items
	
	$menuItems = array(
		
		"club-sandwich" => array(
			
			title 	=> "Club Sandwich",
			price	=> 11,
			blurb	=> "Bacon ipsum dolor amet pig picanha swine short ribs bresaola pork belly pork chop landjaeger short loin. Hamburger t-bone pork chop tenderloin pastrami pancetta prosciutto pork belly pork swine jerky. Drumstick pork chop rump salami tri-tip, kielbasa brisket t-bone flank pastrami alcatra. Tongue chicken ham picanha biltong. Strip steak jowl rump corned beef t-bone pork kevin pancetta pork chop. Pork belly leberkas doner drumstick landjaeger filet mignon. Tongue pig jerky, spare ribs salami sirloin kevin sausage short ribs meatloaf porchetta ribeye chicken venison.",
			drink	=> "Club Soda"
			
		),
		
		"dill-salmon" => array(
			
			title 	=> "Lemon &amp; Dill Salmon",
			price	=> 18,
			blurb	=> "Bacon ipsum dolor amet pig picanha swine short ribs bresaola pork belly pork chop landjaeger short loin. Hamburger t-bone pork chop tenderloin pastrami pancetta prosciutto pork belly pork swine jerky. Drumstick pork chop rump salami tri-tip, kielbasa brisket t-bone flank pastrami alcatra. Tongue chicken ham picanha biltong. Strip steak jowl rump corned beef t-bone pork kevin pancetta pork chop. Pork belly leberkas doner drumstick landjaeger filet mignon. Tongue pig jerky, spare ribs salami sirloin kevin sausage short ribs meatloaf porchetta ribeye chicken venison.",
			drink	=> "Fancy Wine"
			
		),
		
		"super-salad" => array(
			
			title 	=> "The Super Salad<sup&reg;</sup>",
			price	=> 34,
			blurb	=> "Veggies es bonus vobis, proinde vos postulo essum magis kohlrabi welsh onion daikon amaranth tatsoi tomatillo melon azuki bean garlic.",
			drink	=> "Jug o' Water"
			
		),
		
		"mexican-barbacoa" => array(
			
			title 	=> "Mexican Barbacoa",
			price	=> 23,
			blurb	=> "Jelly beans topping biscuit marzipan sweet tootsie roll topping cookie. Candy canes cheesecake danish pie. Candy canes tiramisu sesame snaps cookie lollipop marshmallow cookie sesame snaps. Topping tiramisu dragée macaroon bonbon cotton candy sweet lollipop bear claw. Chocolate bar tart wafer. Macaroon cotton candy bonbon jujubes sugar plum sugar plum. Wafer candy canes pastry macaroon gingerbread. Wafer ice cream icing. Cake dessert pie halvah donut gingerbread. Toffee candy canes marshmallow topping lemon drops. Gingerbread jujubes apple pie croissant apple pie pastry. Jujubes chocolate cake tart cotton candy. Jelly beans sesame snaps jelly.",
			drink	=> "Beer with a lime"
			
		)
			
	);
						
?>













