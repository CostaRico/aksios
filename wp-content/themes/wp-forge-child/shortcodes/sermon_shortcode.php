<?php

function sermon_shortcode() {

	$args = array(
	'post_type' => 'sermon',
	);

	$query = new WP_Query( $args );
	if($query->have_posts()) :
	ob_start();

?>
	<div class="theme-sermon-item sermon-col-1 sermon-style-2">
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="sermon-item">
                <a class="sermon-img" href="<?php the_permalink(); ?>">
                    <img width="370" height="208" src="<?php the_post_thumbnail_url(); ?>" class="attachment-large size-large" alt="" sizes="(max-width: 370px) 100vw, 370px">  
                </a>

                <div class="sermon-infor">
                    <div class="sermon-content">
                        <div class="sermon-speaker">
                            <span class="cate"><a href="" title="View all posts in this category"></a></span>
                        </div>
                        <h4 class="sermon-name">
                            <a href="<?php the_permalink(); ?>" class="sv-custom-color"><?php the_title(); ?></a> 
                        </h4>
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
	</div>
	<?php else : ?>
		<p> Nothing found! </p>
	<?php endif; ?>

<?php

	$output_string = ob_get_contents();
	ob_end_clean();
	return $output_string;
	wp_reset_postdata();

}
add_shortcode('sermons', 'sermon_shortcode');
?>