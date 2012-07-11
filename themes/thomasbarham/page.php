<?php get_header(); ?>

<div id="content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
			<article>
				
	
				<div class="post-content page-content">
					<?php if ( is_page ('commercials') ) 
					{
						$commercials = new Pod('commercials');
			          	$commercials->findRecords('t.commercialdisplayorder ASC', -1);
			          	$totalslides = $commercials->getTotalRows();
					?>
						<?php if( $totalslides>0 ) : ?>
						<div id="carousel-image-and-text" class="touchcarousel black-and-white">
							
						           
							<ul class="touchcarousel-container">
								<?php while ( $commercials->fetchRecord() ) : ?>
									<?php
						              // set our variables
							      		$commercial_id         = $commercials->get_field('id');
						            	$commercial_name       = $commercials->get_field('name');
						            	$commercial_image      = $commercials->get_field('image');
										$commercial_vimeolink  = $commercials->get_field('vimeolink');

						            	// data cleanup
						            	$commercial_image     = $commercial_image[0]['guid'];
						            ?>
									<?php if( !empty( $commercial_image ) ) : ?>
										<li class="touchcarousel-item">
											<a class="item-block fancybox" title="<?php echo $commercial_name; ?>" href="<?php echo $commercial_image; ?>">
										    	<img src="<?php echo $commercial_image; ?>"/>
										    	<!--<h4><?php echo $commercial_name; ?></h4>-->  

											</a>
										</li>
									<?php endif ?>
									<?php if( !empty( $commercial_vimeolink ) ) : ?>
										<li class="touchcarousel-item">
											<a class="item-block iframe" title="<?php echo $commercial_name; ?>" href="http://player.vimeo.com/video/<?php echo $commercial_vimeolink; ?>?title=0&amp;byline=0&amp;portrait=0">
									    		<img src="<?php echo getVimeoInfo($commercial_vimeolink) ?>"/>
									    		<!--<h4><?php echo $commercial_name; ?></h4>--> 
										
											</a>
										</li>
									<?php endif ?> 
								<?php endwhile; ?>
							</ul> 
						</div>
						<?php endif; ?>
					<?php }?>

					<?php if ( is_page ('corporate') ) {
						$corporate = new Pod('corporate');
			          	$corporate->findRecords('t.corporatedisplayorder ASC', -1);
			          	$totalslides = $corporate->getTotalRows();
					?>
					<?php if( $totalslides>0 ) : ?>
						<div id="carousel-image-and-text" class="touchcarousel minimal-light">
							<ul class="touchcarousel-container">
								<?php while ( $corporate->fetchRecord() ) : ?>
									<?php
						              // set our variables
							      		$corporate_id         = $corporate->get_field('id');
						            	$corporate_name       = $corporate->get_field('name');
						            	$corporate_image      = $corporate->get_field('image');
										$corporate_vimeolink  = $corporate->get_field('vimeolink');

						            	// data cleanup
						            	$corporate_image     = $corporate_image[0]['guid'];
						            ?>

								<?php if( !empty( $corporate_image ) ) : ?>
									<li class="touchcarousel-item">
										<a class="item-block fancybox" title="<?php echo $corporate_name; ?>" href="<?php echo $corporate_image; ?>">
									    	<img src="<?php echo $corporate_image; ?>"/>
									    	<!--<h4><?php echo $corporate_name; ?></h4>-->    
										</a>
									</li>
								<?php endif ?>
								<?php if( !empty( $corporate_vimeolink ) ) : ?>
									<li class="touchcarousel-item">
										<a class="item-block iframe" title="<?php echo $corporate_name; ?>" href="http://player.vimeo.com/video/<?php echo $title_vimeolink; ?>?title=0&amp;byline=0&amp;portrait=0">
								    		<img src="<?php echo getVimeoInfo($corporate_vimeolink) ?>"/>
								    		<!--<h4><?php echo $corporate_name; ?></h4>-->   
									
										</a>
									</li>
								<?php endif ?>
								<?php endwhile; ?>
								
							</ul> 
						</div>
						<?php endif; ?>
					<?php }?>

					<?php if ( is_page ('titles') ) {
						$titles = new Pod('titles');
			          	$titles->findRecords('t.titlesdisplayorder ASC', -1);
			          	$totalslides = $titles->getTotalRows();
					?>
					<?php if( $totalslides>0 ) : ?>
						<div id="carousel-image-and-text" class="touchcarousel minimal-light">
							<ul class="touchcarousel-container">
								<?php while ( $titles->fetchRecord() ) : ?>
									<?php
						              // set our variables
							      		$title_id         = $titles->get_field('id');
						            	$title_name       = $titles->get_field('name');
						            	$title_image      = $titles->get_field('image');
										$title_vimeolink  = $titles->get_field('vimeolink');

						            	// data cleanup
						            	$title_image     = $title_image[0]['guid'];
						            ?>

								<?php if( !empty( $title_image ) ) : ?>
									<li class="touchcarousel-item">
										<a class="item-block fancybox" title="<?php echo $title_name; ?>" href="<?php echo $title_image; ?>">
									    	<img src="<?php echo $title_image; ?>"/>
									    	<!--<h4><?php echo $title_name; ?></h4>-->    
										</a>
									</li>
								<?php endif ?>
								<?php if( !empty( $title_vimeolink ) ) : ?>
									<li class="touchcarousel-item">
										<a class="item-block iframe" title="<?php echo $title_name; ?>" href="http://player.vimeo.com/video/<?php echo $title_vimeolink; ?>?title=0&amp;byline=0&amp;portrait=0">
								    		<img src="<?php echo getVimeoInfo($title_vimeolink) ?>"/>
								    		<!--<h4><?php echo $title_name; ?></h4>-->   
									
										</a>
									</li>
								<?php endif ?>
								<?php endwhile; ?>
								
							</ul> 
						</div>
						<?php endif; ?>
					<?php }?>

					<?php if ( is_page ('concept') ) {
						$concept = new Pod('concept');
			          	$concept->findRecords('t.conceptdisplayorder ASC', -1);
			          	$totalslides = $concept->getTotalRows();
					?>
					<?php if( $totalslides>0 ) : ?>
						<div id="carousel-image-and-text" class="touchcarousel minimal-light">
							<ul class="touchcarousel-container">
								<?php while ( $concept->fetchRecord() ) : ?>
									<?php
						              // set our variables
							      		$concept_id         = $concept->get_field('id');
						            	$concept_name       = $concept->get_field('name');
						            	$concept_image      = $concept->get_field('image');

						            	// data cleanup
						            	$concept_image     = $concept_image[0]['guid'];
						            ?>

								<?php if( !empty( $concept_image ) ) : ?>
									<li class="touchcarousel-item">
										<a class="item-block fancybox" title="<?php echo $concept_name; ?>" href="<?php echo $concept_image; ?>">
									    	<img src="<?php echo $concept_image; ?>"/>
									    	<!--<h4><?php echo $title_name; ?></h4>-->    
										</a>
									</li>
								<?php endif ?>
								<?php endwhile; ?>
								
							</ul> 
						</div>
						<?php endif; ?>
					<?php }?>
					</div>
					
					
					
					
					<?php the_content(); ?>
				</div><!--.post-content .page-content -->
			</article>

			
		</div><!--#post-# .post-->


	<?php endwhile; ?>

</div><!--#content-->
<div class="push"></div>

<script type="text/javascript">
	jQuery(function($) {


		$("#carousel-image-and-text").touchCarousel({					
			pagingNav: false,
			snapToItems: true,
			itemsPerMove: 1,
			transitionSpeed: 500,				
			scrollToLast: false,
			loopItems: true,
			scrollbar: false,
	    });		
	});
	
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
