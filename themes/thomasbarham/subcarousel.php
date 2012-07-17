<?php 
/* Template Name: Concept Detail */
get_header(); ?>
	<div id="ajax">
	
		<?php
			$found_concept = false;
			global $pods;
			$concept_slug  = pods_url_variable(-1);
			$concept = new Pod('concept', $concept_slug); 
			
			if( !empty( $concept->data ) )
			{
				$found_concept = true; 
				
				// set our variables
		      		$concept_id         = $concept->get_field('id');
	            	$concept_name       = $concept->get_field('name');
	            	$concept_image      = $concept->get_field('image');
					$concept_image2     = $concept->get_field('image2');
					$concept_image3     = $concept->get_field('image3');
					$concept_image4     = $concept->get_field('image4');
					$concept_image5     = $concept->get_field('image5');
					$concept_image6     = $concept->get_field('image6');
					$concept_image7     = $concept->get_field('image7');
					$concept_image8     = $concept->get_field('image8');
					$concept_image9     = $concept->get_field('image9');
					$concept_image10    = $concept->get_field('image10');

	            	// data cleanup
	            	$concept_image      = $concept_image[0]['guid'];
					$concept_image2     = $concept_image2[0]['guid'];
					$concept_image3     = $concept_image3[0]['guid'];
					$concept_image4     = $concept_image4[0]['guid'];
					$concept_image5     = $concept_image5[0]['guid'];
					$concept_image6     = $concept_image6[0]['guid'];
					$concept_image7     = $concept_image7[0]['guid'];
					$concept_image8     = $concept_image8[0]['guid'];
					$concept_image9     = $concept_image9[0]['guid'];
					$concept_image10    = $concept_image10[0]['guid'];
			}	
		?>
			<?php if( $found_concept ) : ?>
				<div id="concepts_container">
				<div id="subcarousel" class="touchcarousel black-and-white">
					<ul class="touchcarousel-container">
						
            
						<?php if( !empty( $concept_image ) ) : ?>
							<li class="touchcarousel-item">
								<a class="item-block fancybox" title="<?php echo $concept_name; ?>" href="<?php echo $concept_image; ?>">
							    	<img src="<?php echo $concept_image; ?>"/>
            
								</a>
							</li>
							
						<?php endif ?>
						<?php if( !empty( $concept_image2 ) ) : ?>
							<li class="touchcarousel-item">
								<a class="item-block fancybox" title="<?php echo $concept_name; ?>" href="<?php echo $concept_image2; ?>">
							    	<img src="<?php echo $concept_image2; ?>"/>
            
								</a>
							</li>
							
						<?php endif ?>
						<?php if( !empty( $concept_image3 ) ) : ?>
							<li class="touchcarousel-item">
								<a class="item-block fancybox" title="<?php echo $concept_name; ?>" href="<?php echo $concept_image3; ?>">
							    	<img src="<?php echo $concept_image3; ?>"/>
            
								</a>
							</li>
							
						<?php endif ?>
						<?php if( !empty( $concept_image4 ) ) : ?>
							<li class="touchcarousel-item">
								<a class="item-block fancybox" title="<?php echo $concept_name; ?>" href="<?php echo $concept_image4; ?>">
							    	<img src="<?php echo $concept_image4; ?>"/>
            
								</a>
							</li>
							
						<?php endif ?>
						<?php if( !empty( $concept_image5 ) ) : ?>
							<li class="touchcarousel-item">
								<a class="item-block fancybox" title="<?php echo $concept_name; ?>" href="<?php echo $concept_image5; ?>">
							    	<img src="<?php echo $concept_image5; ?>"/>
            
								</a>
							</li>
							
						<?php endif ?>
						<?php if( !empty( $concept_image6 ) ) : ?>
							<li class="touchcarousel-item">
								<a class="item-block fancybox" title="<?php echo $concept_name; ?>" href="<?php echo $concept_image6; ?>">
							    	<img src="<?php echo $concept_image6; ?>"/>
            
								</a>
							</li>
							
						<?php endif ?>
						<?php if( !empty( $concept_image7 ) ) : ?>
							<li class="touchcarousel-item">
								<a class="item-block fancybox" title="<?php echo $concept_name; ?>" href="<?php echo $concept_image7; ?>">
							    	<img src="<?php echo $concept_image7; ?>"/>
            
								</a>
							</li>
							
						<?php endif ?>
						<?php if( !empty( $concept_image8 ) ) : ?>
							<li class="touchcarousel-item">
								<a class="item-block fancybox" title="<?php echo $concept_name; ?>" href="<?php echo $concept_image8; ?>">
							    	<img src="<?php echo $concept_image8; ?>"/>
            
								</a>
							</li>
							
						<?php endif ?>
						<?php if( !empty( $concept_image9 ) ) : ?>
							<li class="touchcarousel-item">
								<a class="item-block fancybox" title="<?php echo $concept_name; ?>" href="<?php echo $concept_image9; ?>">
							    	<img src="<?php echo $concept_image9; ?>"/>
            
								</a>
							</li>
							
						<?php endif ?>
						<?php if( !empty( $concept_image10 ) ) : ?>
							<li class="touchcarousel-item">
								<a class="item-block fancybox" title="<?php echo $concept_name; ?>" href="<?php echo $concept_image10; ?>">
							    	<img src="<?php echo $concept_image10; ?>"/>
            
								</a>
							</li>
						<?php endif ?>
            
					</ul> 
				</div>
				</div>
			<?php endif; ?>
		
	</div>

	<script type="text/javascript">
	jQuery(document).ready(function(){
		$("#subcarousel").touchCarousel({					
			pagingNav: false,
			snapToItems: true,
			itemsPerMove: 1,
			transitionSpeed: 500,				
			scrollToLast: false,
			loopItems: true,
			scrollbar: false,
	    });

	  });
	</script>
	
<?php get_footer(); ?>