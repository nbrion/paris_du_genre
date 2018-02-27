<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
		<footer>
		  <div class="container">
		    <div class="row">
		      <a href="#" class="col-sm-2">Mentions légales</a>
		      <p class="col-sm-10">Ce site rend compte d'un travail universitaire financé par la Mairie de Paris dans le cadre du programme Paris 2030 et réalisé entre 2015 et 2018.</p>
		    </div>
		  </div>
		</footer>
<!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
