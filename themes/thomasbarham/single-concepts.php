<?php 
/* Template Name: Individual Concepts */
get_header(); ?>
	
		
				<div class="carousel_container">
					<h3><?php the_title(); ?></h3><p><a href="<?php echo get_permalink(26); ?>">Back to Concepts</a></p>
					<div id="subcarousel" class="touchcarousel black-and-white">
						<ul class="touchcarousel-container">
							<?php if(get_field('concept')): ?>
								<?php while(has_sub_field('concept')): ?>			
								<li class="touchcarousel-item">
									<a class="item-block fancybox" title="<?php the_sub_field('concept_name'); ?>" href="<?php the_sub_field('concept_image'); ?>">
								    	<img src="<?php the_sub_field('concept_thumbnail'); ?>"/>
									</a>
								</li>
								<?php endwhile; ?>
							<?php endif; ?>
						</ul> 
					</div>
				</div>
			
		

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