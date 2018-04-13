<?php /* Template Name: Landing Page */ ?>

<?php get_header(); ?>

<?php get_template_part('page-header'); ?>

<div class="page-content main-img"> <!-- Begin Content Container - Closed in Footer-->
    <div class="parallax-window">
        <div class="container content-area">
            <div class="columns" id="landing-text">
                <div class="column is-10 is-offset-1">
                    <h2 class="center is-size-2 has-text-weight-semibold">Clubbing Done Right</h2>
                    <h4 class="center is-size-4 has-text-weight-light">Enter your travel destination below to start connecting with a nightlife expert</h4>
                </div>
            </div>
            <div class="columns">
                <div class="column is-6 is-offset-3">
                    <div id="lp-dropdown" class="no-pad dropdown  has-text-centered full-wide">
                        <div class="dropdown-trigger has-text-centered full-wide">
                            <button class="button has-text-centered full-wide " aria-haspopup="true" aria-controls="dropdown-menu">
                                <span><i class="fas fa-search trigger-text" aria-hidden="true"></i></span>
                                <span class="trigger-text lil-side-margin">What is your destination?</span>
                            </button>
                        </div>
                        <div class="dropdown-menu has-text-centered full-wide" id="dropdown-menu" role="menu">
                            <div class="dropdown-content">
                                <a class="dropdown-item" href="<?php print home_url(); ?>/vegas">Vegas</a>
                                <a class="dropdown-item" href="<?php print home_url(); ?>/miami">Miami</a>
                                <a class="dropdown-item" href="<?php print home_url(); ?>/new-york">New York</a>
                                <a class="dropdown-item" href="<?php print home_url(); ?>/los-angeles">Los Angeles</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>  
        </div> <!-- /.row -->
    </div>  

<?php get_footer(); ?>
