<?php
/*
Template Name: Page Sermons
*/

get_header(); ?>

<?php 

$args = array(
	'post_type' => 'sermon',
);

$query = new WP_Query( $args );

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="flw">
		<div class="sermons">
			<div class="theme-sermon-item flw  sermon-col-3 sermon-style-1">
				<?php if ( $query->have_posts() ) : ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<div class="sermon-item">
                            <div class="sermon-thumb">
	                            <a class="sermon-img" href="<?php the_permalink(); ?>">
	                                <img width="370" height="208" src="<?php the_post_thumbnail_url(); ?>" class="attachment-large size-large" alt="" sizes="(max-width: 370px) 100vw, 370px">  
	                            </a>
                   			</div>

                            <div class="sermon-infor">
		                        <div class="sermon-content">
		                            <div class="sermon-speaker">
		                                <span class="cate"><a href="" title="View all posts in this category"></a></span>
		                                <span class="divider">-</span>
		                                <span class="sermon-author">
		                                    <a href="" title="Posts by <?php the_author(); ?>" rel="author"><?php the_author(); ?></a>                                
		                                </span>
		                            </div>
		                            <h4 class="sermon-name">
		                                <a href="<?php the_permalink(); ?>" class="sv-custom-color"><?php the_title(); ?></a> 
		                            </h4>
		                            <div class="sermon-des">
		                               <p><?php the_content() ?></p>
		                            </div>
		                        </div>
		                        <div class="sermon-links">
		                            <div class="play-btn">
		                                    <span class="sm-video">
		                                    	<a href="<?php the_field('video') ?>" class="consult-lightbox-popup ion-ios-play">
		                                    	</a>
		                                    </span>
		                                 
		                                    <span class="sm-audio"> 
		                                        <a href="<?php the_field('audio') ?>" class="fancy_audio"><span class="ion-ios-mic"></span></a> 
		                                    </span>
		                                 
		                                    <span class="sm-download ">
		                                        <a class="ion-code-download" href="<?php the_field('download') ?>" download=""></a>
		                                    </span>
		                                    <span class="sm-pdf">
		                                        <a href="<?php the_field('document') ?>" class="ion-ios-paper-outline">
		                                        </a>
		                                    </span>
		                            </div>
		                            <a href="<?php the_permalink() ?>" class="sermon-read-more"><span class="ion-ios-arrow-thin-right"></span></a>
		                        </div>
                   			</div>
                        </div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>