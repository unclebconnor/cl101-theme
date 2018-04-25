<?php /* Template Name: How It Works Template */ ?>

<?php get_header(); ?>

<?php get_template_part('page-header'); ?>

<div class="page-content has-text-centered"> <!-- Begin Content Container - Closed in Footer-->
    <div class="container content-area">
        <div>
            <h2 class="is-size-2 has-text-weight-semibold">How It Works</h2>
        </div>
        <div class="columns level">
            <div class="column"></div>
            <div class="column is-4 level-item ">
                <img 
                    style="width: 40%;"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/clip-form.png"  
                    alt="Form" 
                />
            </div>
            <div class="blurb column is-4 level-item">
                <h4 class="is-size-4">Fill out form</h4>
                <p>Skip the chaos with an escort into the club, saving time and stress.</p>
            </div>
            <div class="column"></div>
        </div>
        <div class="columns level">
            <div class="column"></div>
            <div class="column is-4 level-item ">
                <img 
                    style="width: 40%;"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/clip-phone.png" 
                    alt="Phone" 
                />
            </div>
            <div class="blurb column is-4 level-item">
                <h4 class="is-size-4">Get contacted by a professional nightlife host</h4>
                <p>Our hosts will help you plan your itinerary before you even get there.</p>
            </div>
            <div class="column"></div>
        </div>
        <div class="columns level">
            <div class="column"></div>
            <div class="column is-4 level-item ">
                <img 
                    style="width: 40%;" 
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/clip-speech.png" 
                    alt="Speech" 
                />
            </div>
            <div class="blurb column is-4 level-item">
                <h4 class="is-size-4">Connect with your host when you arrive</h4>
                <p>Feel confident that you have a known commodity, a trusted host who has the skills and connections to help you on every trip you make to Vegas.</p>
            </div>
            <div class="column"></div>
            <?php 
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                get_template_part( 'page-content', get_post_format() );
                endwhile; endif; 
            ?>
        </div> <!-- /.row -->
    </div> 

<?php get_footer(); ?>
