<?php get_header(); ?>

<div class="wrapper">
<div id="content">
        <div class="description">
            <?php $my_query = new WP_Query('page_id='.get_theme_mod( 'description_dropdown_settings'));
            while ($my_query->have_posts()) : $my_query->the_post();
                $do_not_duplicate = $post->ID;?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        </div>
        <h3>
            <?php $obj = get_post_type_object( 'our_courses' );
            echo $obj->labels->singular_name; ?>
        </h3>
        <ul class="courses-list">
            <?php
            $args = array(
                'post_type'      => 'our_courses',
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
                        <?php the_post_thumbnail(); ?>
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <?php the_content(); ?>
                    </li>
                <?php
                }
            }
            else {
                echo 'Sorry, there are no courses here, yet.';
            }
            ?>
        </ul>
    </div>

<?php get_footer(); ?>