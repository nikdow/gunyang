<?php if ( is_active_sidebar( 'home_right_1' ) && is_front_page() ) : ?>
    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
        <?php dynamic_sidebar( 'home_right_1' ); ?>
    </div><!-- #primary-sidebar -->
<?php endif; ?>