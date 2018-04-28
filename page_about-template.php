<?php /* Template Name: About Template */ ?>

<?php get_header(); ?>

<?php get_template_part('page-header'); ?>

<div class="page-content"> <!-- Begin Content Container - Closed in Footer-->
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h2 class="title is-size-2 has-text-centered">Mission &amp; History</h2>
            </div>
        </div>
    </section>
    <div class="container is-fluid content-area">
        <div class="columns">
            <div class="has-text-centered column is-10 is-offset-1 lil-side-margin">
                <p>Clubbing101 connects travelers to professional nightlife host who provide personalized itineraries and VIP entry into clubs. Whether you're planning a trip in the future or just arrived in town, we have you covered. You'll be working with a dedicated host who plans out your experience based on who you are and what your group wants to do. </p>
                <p>Gianni, saw an opportunity to help those not well versed in the nightclub scene by connecting them to trusted hosts for a fully tailored stress free experience. </p>
                <p>Clubbing101 provides you with the knowledge that you are in good hands before you step foot into another city. The focus and care that you receive from your host will define your memories and experiences that last a lifetime. We hope to be your first stop wherever you book a trip, connecting you to trusted nightlife professionals wherever you go.</p>
                <p>Clubbing.Done.Right.</p>
            </div> 
        </div>
    </div>
    <hr style="color:white;"/>
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h2 class="title is-size-2 has-text-centered">Team</h2>
            </div>
        </div>
    </section>
    <div class="container is-fluid content-area">
        <div class="columns">
            <div class="has-text-centered column is-10 is-offset-1 lil-side-margin">
                <img 
                    style="max-width: 250px; border-radius:50%; margin-bottom: 13px;" 
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/gianni.jpg"
                    alt="Form" 
                />
                
                <p>Gianni Macias is a born entrepreneur with ten years of extensive sales and management experience. Gianni rose through the ranks of Financial Services doing outside sales, sales management and executive leadership, eventually building his first company. Gianni has a “can do” attitude with a burning desire to succeed. He lives his life by the saying, “If there's a will, there's a way.”</p>
            </div> 
        </div>
        <div class="columns">
            <div class="has-text-centered column is-10 is-offset-1">

            	<?php 
                	if ( have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part( 'page-content', get_post_format() );
                	endwhile; endif; 
            	?>
			</div> 
        </div>
    </div>  

<?php get_footer(); ?>