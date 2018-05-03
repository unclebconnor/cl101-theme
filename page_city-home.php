<?php /* Template Name: City Home Page */ ?>

<?php get_header(); ?>

<?php get_template_part('page-header'); ?>

<div class="page-content main-img"  style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/city-<?php echo strtolower(str_replace(' ','-', get_the_title($post->post_parent))); ?>.jpg')"> <!-- Begin Content Container - Closed in Footer-->
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <?php 
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part( 'page-content', get_post_format() );
                    endwhile; endif; 
                ?>
            </div>
        </div>
    </section>
    <div class="container form-area">
        <div class="columns">
            <div class="column is-8 is-offset-2 is-10-mobile is-offset-1-mobile"> 
                <!-- <div style="margin:40px 0 10px 0"> -->
                    
                    
                <!-- </div> -->
                <?php get_template_part('form'); ?>
            </div> 
        </div> <!-- /.row -->
    </div>  

<?php get_footer(); ?>