<?php /* Template Name: City Home Page */ ?>

<?php get_header(); ?>

<?php get_template_part('page-header'); ?>

<div class="page-content main-img"> <!-- Begin Content Container - Closed in Footer-->
    <div class="container content-area parallax-window">
        <div class="columns">
            <div class="column is-8 is-offset-2 is-10-mobile is-offset-1-mobile"> 
                <?php 
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part( 'page-content', get_post_format() );
                    endwhile; endif; 
                ?>
                <?php get_template_part('form'); ?>
            </div> 
        </div> <!-- /.row -->
    </div>  

<?php get_footer(); ?>