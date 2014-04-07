<?php get_header(); ?>

<div class="wrapper">
<div id="content">
    <ul class="articles">
        <?php
        	if ( have_posts() ) {
                while ( have_posts() ) {
                  the_post();?>

                    <li>
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <?php the_content(); ?>
                    </li>

             <?php }
        }

        else {
            echo 'Sorry, there are no posts here, yet.';
        }
        ?>
    </ul>
</div>

<?php get_footer(); ?>