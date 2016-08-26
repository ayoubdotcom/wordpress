<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
                    <div class=".container-fluid col-sm-12" style="background-color: #00A8EF;">
                        <div class="col-sm-10 col-sm-offset-1" style="margin-top: 10px">
                            <div class="col-sm-6">
                            <ul class="bxslider" >
                                <li><img src="<?php echo get_template_directory_uri(); ?>/images/char1.jpg" /></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/images/char2.jpg" /></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/images/char3.jpg" /></li>
                            </ul>
                            </div>
                            <div class="col-sm-6">
                                <p style="text-align: center; background-color: rgba(255, 255, 255, 0.3)">Pour le plaisir du confort Obtenez une soumission gratuite<img src="<?php echo get_template_directory_uri(); ?>/images/google-maps-icon.png"/></p>
                                <p style="text-align: center; background-color: white; padding: 10px">Rejoignez nous sur les reseaux sociaux! <br/><img class="img-rounded" src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.ico" height="50px" width="50px" />&nbsp<img class="img-rounded" src="<?php echo get_template_directory_uri(); ?>/images/gmail.png" height="50px" width="50px"/></p>
                            </div>
                        </div>
                    </div>
                        
		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
