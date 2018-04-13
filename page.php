<?php get_header(); ?>

<?php get_template_part('page-header'); ?>

<div class="page-content main-img"> <!-- Begin Content Container - Closed in Footer-->
    <div class="container content-area">
        <div class="columns">
            <div>  
                <?php 
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part( 'page-content', get_post_format() );
                    endwhile; endif; 
                ?>
            </div> <!-- page-main -->
        </div>  <!-- /.row -->   
    </div>
    
<?php get_footer(); ?>