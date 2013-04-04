<?php 
/* Template Name: Concept Detail */
get_header(); ?>
	
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
					$concept_image_ID   = $concept->get_field('image.ID');
					$concept_image2     = $concept->get_field('image2');
					$concept_image2_ID  = $concept->get_field('image2.ID');
					$concept_image3     = $concept->get_field('image3');
					$concept_image3_ID  = $concept->get_field('image3.ID');
					$concept_image4     = $concept->get_field('image4');
					$concept_image4_ID  = $concept->get_field('image4.ID');
					$concept_image5     = $concept->get_field('image5');
					$concept_image5_ID  = $concept->get_field('image5.ID');
					$concept_image6     = $concept->get_field('image6');
					$concept_image6_ID  = $concept->get_field('image6.ID');
					$concept_image7     = $concept->get_field('image7');
					$concept_image7_ID  = $concept->get_field('image7.ID');
					$concept_image8     = $concept->get_field('image8');
					$concept_image8_ID  = $concept->get_field('image8.ID');
					$concept_image9     = $concept->get_field('image9');
					$concept_image9_ID  = $concept->get_field('image9.ID');
					$concept_image10    = $concept->get_field('image10');
					$concept_image10_ID = $concept->get_field('image10.ID');
	            	$concept_caption    = $concept->get_field('caption');
					$concept_caption2   = $concept->get_field('caption2');
					$concept_caption3   = $concept->get_field('caption3');
					$concept_caption4   = $concept->get_field('caption4');
					$concept_caption5   = $concept->get_field('caption5');
					$concept_caption6   = $concept->get_field('caption6');
					$concept_caption7   = $concept->get_field('caption7');
					$concept_caption8   = $concept->get_field('caption8');
					$concept_caption9   = $concept->get_field('caption9');
					$concept_caption10  = $concept->get_field('caption10');
					

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
					$concept_image_thumb   = wp_get_attachment_image_src($concept_image_ID,'medium');
					$concept_image2_thumb  = wp_get_attachment_image_src($concept_image2_ID,'medium');
					$concept_image3_thumb  = wp_get_attachment_image_src($concept_image3_ID,'medium');
					$concept_image4_thumb  = wp_get_attachment_image_src($concept_image4_ID,'medium');
					$concept_image5_thumb  = wp_get_attachment_image_src($concept_image5_ID,'medium');
					$concept_image6_thumb  = wp_get_attachment_image_src($concept_image6_ID,'medium');
					$concept_image7_thumb  = wp_get_attachment_image_src($concept_image7_ID,'medium');
					$concept_image8_thumb  = wp_get_attachment_image_src($concept_image8_ID,'medium');
					$concept_image9_thumb  = wp_get_attachment_image_src($concept_image9_ID,'medium');
					$concept_image10_thumb = wp_get_attachment_image_src($concept_image10_ID,'medium');
			}	
		?>
			<?php if( $found_concept ) : ?>
				<div class="carousel_container">
					<h3><?php echo $concept_name; ?></h3><p><a href="<?php echo get_permalink(26); ?>">Back to Concepts</a></p>
					<div id="subcarousel" class="touchcarousel black-and-white">
						<ul class="touchcarousel-container">
							
	            
							<?php if( !empty( $concept_image ) ) : ?>
								<li class="touchcarousel-item">
									<a class="item-block fancybox" title="<?php echo $concept_caption; ?>" href="<?php echo $concept_image; ?>">
								    	<img src="<?php echo $concept_image_thumb[0]; ?>"/>
	            
									</a>
								</li>
								
							<?php endif ?>
							<?php if( !empty( $concept_image2 ) ) : ?>
								<li class="touchcarousel-item">
									<a class="item-block fancybox" title="<?php echo $concept_caption2; ?>" href="<?php echo $concept_image2; ?>">
								    	<img src="<?php echo $concept_image2_thumb[0]; ?>"/>
	            
									</a>
								</li>
								
							<?php endif ?>
							<?php if( !empty( $concept_image3 ) ) : ?>
								<li class="touchcarousel-item">
									<a class="item-block fancybox" title="<?php echo $concept_caption3; ?>" href="<?php echo $concept_image3; ?>">
								    	<img src="<?php echo $concept_image3_thumb[0]; ?>"/>
	            
									</a>
								</li>
								
							<?php endif ?>
							<?php if( !empty( $concept_image4 ) ) : ?>
								<li class="touchcarousel-item">
									<a class="item-block fancybox" title="<?php echo $concept_caption4; ?>" href="<?php echo $concept_image4; ?>">
								    	<img src="<?php echo $concept_image4_thumb[0]; ?>"/>
	            
									</a>
								</li>
								
							<?php endif ?>
							<?php if( !empty( $concept_image5 ) ) : ?>
								<li class="touchcarousel-item">
									<a class="item-block fancybox" title="<?php echo $concept_caption5; ?>" href="<?php echo $concept_image5; ?>">
								    	<img src="<?php echo $concept_image5_thumb[0]; ?>"/>
	            
									</a>
								</li>
								
							<?php endif ?>
							<?php if( !empty( $concept_image6 ) ) : ?>
								<li class="touchcarousel-item">
									<a class="item-block fancybox" title="<?php echo $concept_caption6; ?>" href="<?php echo $concept_image6; ?>">
								    	<img src="<?php echo $concept_image6_thumb[0]; ?>"/>
	            
									</a>
								</li>
								
							<?php endif ?>
							<?php if( !empty( $concept_image7 ) ) : ?>
								<li class="touchcarousel-item">
									<a class="item-block fancybox" title="<?php echo $concept_caption7; ?>" href="<?php echo $concept_image7; ?>">
								    	<img src="<?php echo $concept_image7_thumb[0]; ?>"/>
	            
									</a>
								</li>
								
							<?php endif ?>
							<?php if( !empty( $concept_image8 ) ) : ?>
								<li class="touchcarousel-item">
									<a class="item-block fancybox" title="<?php echo $concept_caption8; ?>" href="<?php echo $concept_image8; ?>">
								    	<img src="<?php echo $concept_image8_thumb[0]; ?>"/>
	            
									</a>
								</li>
								
							<?php endif ?>
							<?php if( !empty( $concept_image9 ) ) : ?>
								<li class="touchcarousel-item">
									<a class="item-block fancybox" title="<?php echo $concept_caption9; ?>" href="<?php echo $concept_image9; ?>">
								    	<img src="<?php echo $concept_image9_thumb[0]; ?>"/>
	            
									</a>
								</li>
								
							<?php endif ?>
							<?php if( !empty( $concept_image10 ) ) : ?>
								<li class="touchcarousel-item">
									<a class="item-block fancybox" title="<?php echo $concept_caption10; ?>" href="<?php echo $concept_image10; ?>">
								    	<img src="<?php echo $concept_image10_thumb[0]; ?>"/>
	            
									</a>
								</li>
							<?php endif ?>
	            
						</ul> 
					</div>
				</div>
			<?php endif; ?>
		

	<script type="text/javascript">
	jQuery(document).ready(function(){
		$("#subcarousel").touchCarousel({					
			pagingNav: false,
			snapToItems: true,
			itemsPerMove: 2,
			transitionSpeed: 500,				
			scrollToLast: false,
			loopItems: true,
			scrollbar: false,
	    });

	  });


	/* Fancy Box Initialization */

    $(document).ready(function() {
        $('.fancybox').fancybox({
            
        });
    });

	$('.iframe').fancybox({
		'padding' : 10,
		'type' : 'iframe',
		'width' : 560,
		'height' : 340
		
	});
   
	</script>
	
<?php get_footer(); ?>