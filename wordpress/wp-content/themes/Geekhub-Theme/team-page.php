<?php
/*
Template Name: Team-page
*/?>
<?php get_header(); ?>
	<div class="wrapper">
        <div class="content">
            <h2 class="page-title"> <?php $obj = get_post_type_object( 'our_team' );
            echo $obj->labels->singular_name; ?>
            </h2>
            <ul class="articles">
                <?php
                $args = array(
                    'post_type'      => 'our_team',
                    'posts_per_page' => -1,
                    'order'          => 'ASC',
                    'orderby'        => 'ID'
                );
                $articles = new WP_Query( $args );
                if ( $articles->have_posts() ) {
                    while($articles->have_posts() ) {
                        $articles->the_post();
                        ?>
                        <li class="<?php echo ($articles->current_post%2 == 0?'odd':'even'); ?>">
                            <h3>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <?php
                                $mykey_values = get_post_custom_values('profession');
                                foreach ( $mykey_values as $key => $value ) {
                                    echo "<span> $value </span>";
                                }
                                ?>
<!--                                Another variant of displaying custom field "profession"-->
<!--                                <span>--><?php //echo get_post_meta($post->ID, 'profession', true); ?><!--</span>-->
                            </h3>
                            <?php the_post_thumbnail(); ?>
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
    <?php get_footer('team') ?>