<?php
use Roots\Sage\Wrapper;
?>

<!doctype html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('head'); ?>
    <body <?php body_class(); ?>>
        <!--[if IE]>
            <div class="alert alert-warning">
                <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
            </div>
        <![endif]-->
        <div>
          <?php
            do_action('get_header');
            get_template_part('templates/04-global/header/header');
          ?>
          <main>
            <?php include Wrapper\template_path(); ?>
          </main><!-- /.main -->
          <?php
            do_action('get_footer');
            get_template_part('templates/04-global/footer/footer');
            wp_footer();
            ?>
        </div><!-- /.wrap -->
    </body>
</html>
