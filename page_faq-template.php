<?php /* Template Name: FAQ Template */ ?>

<?php get_header(); ?>

<?php get_template_part('page-header'); ?>

<div class="page-content"> <!-- Begin Content Container - Closed in Footer-->
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h2 class="title is-size-2 has-text-centered">Promoters Vs. Host</h2>
            </div>
        </div>
    </section>
    <div class="container content-area">
        <div class="columns">
            <div class="has-text-centered column is-10 is-offset-1">
                <div class="columns">
                    <div class="column is-6 has-text-left">
                        <h3 class="is-size-3 has-text-centered">Nightclub Promoter</h3>
                        <ol>
                            <li><p>Responsible for getting people to come to the club through general admission and guest list.</p></li>
                        </ol>
                    </div>
                    <div class="column is-6 has-text-left">
                        <h3 class="is-size-3 has-text-centered">Nightclub Host</h3>
                        <ol>
                            <li><p>Responsible for booking and managing table service clients</p></li>
                            <li><p>Can also help with guest list and VIP entry</p></li>
                        </ol>
                    </div>
                </div>
            </div> 
        </div>
        <div class="columns">
            <div class="has-text-centered column is-10 is-offset-1 has has-text-centered">
                <h2 class="is-size-2 text-has-weight-semibold">Help Us Grow</h2>
                <p>Your support and contributions will enable us to create jobs and hit our goals, expanding into your favorite cities and connecting you to nightlife professionals worldwide.</p>
            </div> 
        </div>
        <div class="columns">
            <div class="has-text-centered column is-8 is-offset-2">
                <?php 
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part( 'page-content', get_post_format() );
                    endwhile; endif; 
                ?>
            </div> 
        </div>
    </div>  

<?php get_footer(); ?>