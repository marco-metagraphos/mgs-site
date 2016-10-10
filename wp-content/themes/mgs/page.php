<?php
/**
 * Template for displaying pages
 * 
 * @package mgs
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?> 

<div class="main-body">

        <section class="page br-top" >
            <div class="page-content" >
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                     
                    <?php  get_template_part( 'post-format/home-content', get_post_format() ); ?>
                       
                        <?php endwhile; 

                         else : ?>

                    <h2><?php esc_html_e('No Posts Found', 'angel') ?></h2>
                      
                       
                    <?php

                    endif; 

                    ?>

                <?php comments_template(); ?>
            </div>

        </section><!-- end page section -->
      </div><!-- end main body content -->

<?php get_template_part( 'formulario'); ?>

<?php get_footer(); ?>
<?php get_template_part( 'foot-scripts'); ?>