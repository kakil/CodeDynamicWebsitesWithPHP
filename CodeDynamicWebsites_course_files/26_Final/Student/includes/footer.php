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
			
			