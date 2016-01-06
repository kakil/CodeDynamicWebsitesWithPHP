<div id="footer" class="cf">
				
				<div class="column three">
					<strong>Phone</strong>
					808.529.3819
				</div><!-- column -->
				
				<div class="column three">
					<strong>Location</strong>
					123 Kapiolani Boulevard<br/>
					Honolulu, HI
				</div><!-- column -->
				
				<div class="column three last">
					<strong>Hours</strong>
					<em>Tuesday - Thursday</em><br/>
					1:00 - 9:00 pm<br/><br/>
					
					<em>Friday - Saturday</em><br/>
					4:00 - 11:00 pm<br/><br/>
					
					<em>Sunday</em><br/>
					Closed<br/><br/>
					
					<?php 
						
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
						
							'open' 				=> "<em>We're open!</em>",
							'closed' 			=> "<em>Sorry, we're closed.",
							'closed_all_day' 	=> "<em>Sorry, we're closed today.</em>",
							'separator' 		=> " - ",
							'join' 				=> " and ",
							'format' 			=> "g:ia",
							'hours' 			=> "{%open%}{%separator%}{%closed%}",	
						);
						
						date_default_timezone_set('America/New_York'); 
						$storeHours = new StoreHours($hours, $exceptions, $template);
						$storeHours->render();
					?>
				</div><!-- column -->
				
			</div><!-- #footer -->
			
			<small>&copy;<?php echo date('Y'); ?> <?php echo $companyName; ?></small>
			
		</div><!-- .content -->
		
		
	</div><!-- .wrapper -->
	
	<div class="copyright-info">
		<?php include('../assets/includes/copyright.php'); ?>
	</div><!-- .copyright-info -->
	
</body>
</html>
			
			