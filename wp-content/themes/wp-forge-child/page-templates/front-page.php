<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage WP_Forge
 * @since WP-Forge 5.5.1.7
 */

get_header(); ?>

	</section><!-- end .content-wrap -->

    </div><!-- end .content_container -->

    <section class="front-content">
	<div class="medium-7 columns">
<h1>Save Time. Save Money.</h1>
<p><strong>Get custom-made bags direct from the factory.</strong></p>
<p>We’re a leading producer of polypropylene (PP) woven FIBC and small bags, belts, and slings. Our&nbsp;bags can have polyethylene (PE) liners or baffle inside for additional protection and stability. From industry to industry, we continue to find the solutions you’re after. With our global network of manufacturers, we’re able to simplify the process of getting bags from overseas, and each of our bags is made to your specifications. We’re on a mission to provide you with the right bag to meet your unique&nbsp;manufacturing needs, <em>earning</em> your business time and time again.</p>
<p>When you want&nbsp;bags you can rely on at prices you can respect,&nbsp;choose the bags built as tough as the job.</p>
<p><b>Find out what makes us different.&nbsp; &nbsp;&nbsp;<a class="button" href="http://polypackagingproducts.com/about-poly-packaging-products/">About Us</a></b></p>
</div>
</section>

	<?php
        if ( ! is_404() )
        get_sidebar( 'footer' );
    ?>

    <div class="footer_container">

    	<footer id="footer" class="footer_wrap row" role="contentinfo">

            <?php get_template_part( 'content', 'footer' ); ?>

        	<?php get_template_part( 'content', 'social_menu' ); ?>

    	</footer><!-- .row -->

    </div><!-- end #footer_container -->

<?php if( get_theme_mod( 'wpforge_mobile_display' ) == 'yes' || get_theme_mod( 'wpforge_nav_select' ) == 'offcanvas') { ?>

	  <a class="exit-off-canvas"></a>

	</div><!-- .inner-wrap -->

</div><!-- #off-canvas-wrap -->

<?php } // end if ?>

    <div id="backtotop" class="hvr-fade">

        <span class="genericon genericon-collapse"></span>

    </div><!-- #backtotop -->

<?php wp_footer(); ?>
</body>
</html>