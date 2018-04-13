<?php /* Template Name: How It Works Template */ ?>

<?php get_header(); ?>

<?php get_template_part('page-header'); ?>

<div class="page-content main-img"> <!-- Begin Content Container - Closed in Footer-->
    <div class="container content-area">
        <div class="columns">
                <div class="blurb column is-4">
                    <img style="width: 40%;" src="http://localhost:8888/clubbing101/wp-content/uploads/2018/03/form.png" alt="Form" />
                    <h4>Fill out form</h4>
                    <p>Skip the chaos with an escort into the club, saving time and stress.</p>
                </div>
                <div class="blurb column is-4">
                    <img style="width: 40%;" src="http://localhost:8888/clubbing101/wp-content/uploads/2018/03/phone.png" alt="Phone" />
                    <h4>Get contacted by a professional nightlife host</h4>
                    <p>Our hosts will help you plan your itinerary before you even get there.</p>
                </div>
                <div class="blurb column is-4">
                    <img style="width: 40%;" src="http://localhost:8888/clubbing101/wp-content/uploads/2018/03/speech.png" alt="Speech" />
                    <h4>Connect with your host when you arrive</h4>
                    <p>Feel confident that you have a known commodity, a trusted host who has the skills and connections to help you on every trip you make to Vegas.</p>
                </div>
                <?php 
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part( 'page-content', get_post_format() );
                    endwhile; endif; 
                ?>
        </div> <!-- /.row -->
    </div> 

<?php get_footer(); ?>