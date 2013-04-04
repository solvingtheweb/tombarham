<?php get_header(); ?>

<div id="content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
			<article>
				<?php the_content(); ?>
			</article>
		</div><!--#post-# .post-->


<?php endwhile; ?>
				<?php if ( is_page ('home') ) 
				{
					$home = new Pod('home');
			      	$home->findRecords('t.homedisplayorder ASC', -1);
			      	$totalslides = $home->getTotalRows();
				?>
					<?php if( $totalslides>0 ) : ?>

					<div id="maincarousel" class="touchcarousel black-and-white">
						
					           
						<ul class="touchcarousel-container">
							<?php while ( $home->fetchRecord() ) : ?>
								<?php
					              // set our variables
						      		$home_id         = $home->get_field('id');
					            	$home_name       = $home->get_field('name');
					            	$home_image      = $home->get_field('image');
									$home_vimeolink  = $home->get_field('vimeolink');

					            	// data cleanup
					            	$home_image     = $home_image[0]['guid'];
					            ?>
								
								<li class="touchcarousel-item">
									<a class="item-block iframe" title="<?php echo $home_name; ?>" href="http://player.vimeo.com/video/<?php echo $home_vimeolink; ?>?title=0&amp;byline=0&amp;portrait=0">
							    		
							    		<?php if( !empty( $home_image ) ) : ?>
							    			<img src="<?php echo $home_image; ?>"/>

							    		<?php elseif( !empty( $home_vimeolink ) ) : ?>

								    		<img class="vimeo_thumb" src="<?php echo getVimeoInfo($home_vimeolink) ?>"/>
								    		<!--<h4><?php echo $home_name; ?></h4>--> 

							    		<?php endif ?> 
								
									</a>
								</li>

							<?php endwhile; ?>
						</ul> 
					</div>
					<?php endif; ?>
				<?php }?>

				<?php if ( is_page ('commercials') ) 
				{
					$commercials = new Pod('commercials');
			      	$commercials->findRecords('t.commercialdisplayorder ASC', -1);
			      	$totalslides = $commercials->getTotalRows();
				?>
					<?php if( $totalslides>0 ) : ?>

					<div id="maincarousel" class="touchcarousel black-and-white">
						
					           
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
								
								<li class="touchcarousel-item">
									<a class="item-block iframe" title="<?php echo $commercial_name; ?>" href="http://player.vimeo.com/video/<?php echo $commercial_vimeolink; ?>?title=0&amp;byline=0&amp;portrait=0">
							    		
							    		<?php if( !empty( $commercial_image ) ) : ?>
							    			<img src="<?php echo $commercial_image; ?>"/>

							    		<?php elseif( !empty( $commercial_vimeolink ) ) : ?>

								    		<img class="vimeo_thumb" src="<?php echo getVimeoInfo($commercial_vimeolink) ?>"/>
								    		<!--<h4><?php echo $commercial_name; ?></h4>--> 

							    		<?php endif ?> 
								
									</a>
								</li>

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
					<div id="maincarousel" class="touchcarousel black-and-white">
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

					            <li class="touchcarousel-item">
									<a class="item-block iframe" title="<?php echo $title_name; ?>" href="http://player.vimeo.com/video/<?php echo $title_vimeolink; ?>?title=0&amp;byline=0&amp;portrait=0">
							    		
							    		<?php if( !empty( $title_image ) ) : ?>
							    			<img src="<?php echo $title_image; ?>" />

							    		<?php elseif( !empty( $title_vimeolink ) ) : ?>

								    		<img class="vimeo_thumb" src="<?php echo getVimeoInfo($title_vimeolink) ?>"/>
								    		<!--<h4><?php echo $commercial_name; ?></h4>--> 

							    		<?php endif ?> 
								
									</a>
								</li>

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

					<div id="maincarousel" class="touchcarousel black-and-white">
						<ul class="touchcarousel-container">
							<?php while ( $concept->fetchRecord() ) : ?>
								<?php
					              // set our variables
						      		$concept_id         = $concept->get_field('id');
									$concept_slug       = $concept->get_field('slug');
					            	$concept_name       = $concept->get_field('name');
									$concept_image_ID   = $concept->get_field('image.ID');
									$concept_image_thumb = wp_get_attachment_image_src($concept_image_ID,'large');
					            	$concept_image      = $concept->get_field('image');

					            	// data cleanup
					            	$concept_image     = $concept_image[0]['guid'];
					            ?>

							<?php if( !empty( $concept_image ) ) : ?>
								<li class="touchcarousel-item">
									<a class="item-block" title="<?php echo $concept_name; ?>" href="<?php echo $concept_slug; ?>">
								    	<img src="<?php echo $concept_image_thumb[0]; ?>"/>
								    	<!--<h4><?php echo $title_name; ?></h4>-->    
									</a>
								</li>
							<?php endif ?>
							<?php endwhile; ?>
							
						</ul> 
					</div>
					
					<div id="ajax"></div>
				<?php endif; ?>

				<?php }?>

</div><!--#content-->
<div class="push"></div>

<script type="text/javascript">

jQuery(function($) {
		$("#maincarousel").touchCarousel({
			itemsPerMove: 2,				
			transitionSpeed: 500,				
			scrollToLast: false,
			loopItems: true,
			scrollbar:false
	    });
});

/*
jQuery(document).ready(function(){
	jQuery('#ajax').hide();
	jQuery('#maincarousel a').live('click', function(e){  
  		e.preventDefault();  
  		var link = jQuery(this).attr('href');
		jQuery('#ajax').load(link+ ' #ajax', function(){
			$("#subcarousel").touchCarousel({					
				pagingNav: false,
				snapToItems: true,
				itemsPerMove: 1,
				transitionSpeed: 500,				
				scrollToLast: true,
				loopItems: true,
				scrollbar: false,
		    });
		});
  		jQuery('#ajax').show();
  		jQuery('.touchcarousel-container');
		
  	}); 

});*/




	
		
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
