<div id="footer">
    <ul class="widgets">
        <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer sidebar')) : ?>
            <li class="facebook">
                <a href="#">Facebook</a>
            </li>
            <li class="sertificates">
                <a href="#">Sertificates</a>
            </li>
            <?php endif; ?>
        <li class="sponsors">
            <h5>
                <?php $obj = get_post_type_object( 'our_sponsors' );
                echo $obj->labels->singular_name; ?>
            </h5>
            <ul>
                <?php
                $args = array(
                    'post_type'      => 'our_sponsors',
                    'posts_per_page' => -1,
                    'order'          => 'ASC',
                    'orderby'        => 'ID'
                );
                $courses = new WP_Query( $args );
                if ( $courses->have_posts() ) {
                    while($courses->have_posts() ) {
                        $courses->the_post();
                        ?>
                        <li>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        </li>
                    <?php
                    }
                }
                else {
                    echo 'Sorry, there are no sponsors here, yet.';
                }
                ?>
            </ul>
        </li>
    </ul>
    <?php wp_nav_menu(array(
        'theme_location'  => 'main_menu',
        'menu_class'      => 'footer-nav',
        'container'       => false
    )); ?>
    <p>&copy; Copyrights <?php echo date('Y');?> </p>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>