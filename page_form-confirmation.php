<?php /* Template Name: Form Confirmation */ ?>

<?php get_header(); ?>

<?php get_template_part('page-header'); ?>

<div class="page-content main-img"> <!-- Begin Content Container - Closed in Footer-->
    <div class="container content-area parallax-window">
        <div class="columns">
            <div class="column is-6 is-offset-3"> 
            	<h2 class="center is-size-2 has-text-weight-semibold">Thanks for your request!</h2>
                <h4 class="center is-size-4 has-text-weight-semibold">Please look out for an introduction email from a Clubbing 101 rep shortly.</h4>
                <?php 
                	if ( have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part( 'page-content', get_post_format() );
                	endwhile; endif; 
            	?>
			</div> 
        </div> <!-- /.row -->
    </div>  

<?php get_footer(); ?>