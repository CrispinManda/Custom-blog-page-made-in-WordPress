<?php get_header(); ?>

<div class="row">
	
	<div class="col-xs-12 col-sm-8">
	    <div class="row text-center no-margin">
	        <?php 
	        $currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1;
	        $args = array('posts_per_page' => 6, 'paged' => $currentPage);
	        query_posts($args);
	        if( have_posts() ): $i = 0;
	            while( have_posts() ): the_post(); 
	                if ($i < 3): ?>
	                    <?php if($i==0): $column = 12; $class = '';
	                        elseif($i > 0 && $i <= 2): $column = 6; $class = ' second-row-padding';
	                        endif;
	                    ?>
	                    <div class="col-xs-<?php echo $column; echo $class; ?> blog-item">
	                        <?php if( has_post_thumbnail() ):
	                            $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
	                        endif; ?>
	                        <div class="blog-element" style="background-image: url(<?php echo $urlImg; ?>);">
	                            <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	                            <div class="entry-meta">
	                                <small><?php the_author(); ?></small>
	                                <br>
	                                <small><?php the_date(); ?></small>
	                            </div>
	                        </div>
	                    </div>
					
						
	                <?php else: ?>
					
						
	                    <div>
	                        <?php if (has_post_thumbnail()) : ?>
	                            <div style="float:left; margin-right:20px;">
	                                <?php the_post_thumbnail('thumbnail'); ?>
									
	                            </div>
								
	                        <?php endif; ?>
							
							
	                        <h2><a href="<?php the_permalink(); ?>"><?php  the_title(); ?></a></h2>
	                        <div class="entry-meta">
	                            <small><?php the_author(); ?></small>
	                            <br>
	                            <small><?php the_date(); ?></small>
	                        </div>
	                        <?php the_excerpt(); ?>
	                        <a href="<?php the_permalink(); ?>">Read More...</a>
	                    </div>
	                <?php endif; ?>
	            <?php $i++; endwhile; ?>
				
					
				<div class="col-xs-6 text-left">
					<?php next_posts_link('« Older Posts'); ?>
				</div>
				<div class="col-xs-6 text-right">
					<?php previous_posts_link('Newer Posts »'); ?>
				</div>
				
			<?php endif;
					wp_reset_query();
			?>
			</div>
		
		</div>
		
		<div class="col-xs-12 col-sm-4">
			<?php get_sidebar(); ?>
		</div>
		
	</div>
	
	<?php get_footer(); ?>
