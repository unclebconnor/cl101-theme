<?php /* Template Name: How It Works Template */ ?>

<?php get_header(); ?>

<?php get_template_part('page-header'); ?>

<div class="page-content"> <!-- Begin Content Container - Closed in Footer-->
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h2 class="title is-size-2 has-text-centered">How It Works</h2>
            </div>
        </div>
    </section>
    <div class="container is-fluid content-area">
        <div class="columns lil-bottom-margin">
            <div class="column is-8 is-offset-2">
                <div class="columns">
                    <div class="column is-6 has-text-centered">
                       <img 
                            style="max-width: 250px;" 
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/clip-form.png"  
                            alt="Form" 
                        /> 
                    </div>
                    <div class="column is-6 has-text-centered is-flex valign-center lil-side-margin">
                        <div>
                            <h3 class="is-size-3">Fill out form</h3>
                            <p>Skip the chaos with an escort into the club, saving time and stress.</p>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
        <div class="columns lil-bottom-margin">
            <div class="column is-8 is-offset-2">
                <div class="columns">
                    <div class="column is-6 has-text-centered">
                        <img
                            style="max-width: 250px;" 
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/clip-phone.png" 
                            alt="Phone" 
                        />
                    </div>
                    <div class="column is-6 has-text-centered is-flex valign-center lil-side-margin">
                        <div>
                            <h3 class="is-size-3">Get contacted by a professional nightlife host</h3>
                            <p>Our hosts will help you plan your itinerary before you even get there.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="columns lil-bottom-margin">
            <div class="column is-8 is-offset-2">
                <div class="columns">
                    <div class="column is-6 has-text-centered">
                        <img 
                            style="max-width: 250px;" 
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/clip-speech.png" 
                            alt="Speech"
                        />
                    </div>
                    <div class="column is-6 has-text-centered is-flex valign-center lil-side-margin">
                        <div>
                            <h3 class="is-size-3">Connect with your host when you arrive</h3>
                            <p>Feel confident that you have a known commodity, a trusted host who has the skills and connections to help you on every trip you make to Vegas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="columns lil-bottom-margin">
            <?php 
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                get_template_part( 'page-content', get_post_format() );
                endwhile; endif; 
            ?>
        </div>
    </div> 

<?php get_footer(); ?>
