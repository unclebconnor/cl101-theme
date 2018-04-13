<?php /* Template Name: About Template */ ?>

<?php get_header(); ?>

<?php get_template_part('page-header'); ?>

<div class="page-content main-img"> <!-- Begin Content Container - Closed in Footer-->
    <div class="container content-area">
        <div class="columns">
            <div class="column is-6 is-offset-3"> 
            	<?php 
                	if ( have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part( 'page-content', get_post_format() );
                	endwhile; endif; 
            	?>
			</div> 
        </div> <!-- /.row -->
    </div>  

<?php get_footer(); ?>