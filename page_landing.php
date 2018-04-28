<?php /* Template Name: Landing Page */ ?>

<?php get_header(); ?>

<header class="level is-mobile">
    <!-- <div class="columns"> -->
        <div class="level-left">
            <a class="level-item" href="<?php print home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt="Clubbing 101 Logo" id="logo-image"/></span>   
            </a>
        </div>      
</header>

<div class="page-content main-img"> <!-- Begin Content Container - Closed in Footer-->
    <div style="min-height:600px">
        <section class="hero">
            <div class="hero-body">
                <div class="container">
                    <h2 class="title is-size-2 has-text-centered">Clubbing Done Right</h2>
                    <h4 class="subtitle is-size-4 has-text-centered">Enter your travel destination below to start connecting with a nightlife expert</h4>
                </div>
            </div>
        </section>
        <div class="container content-area">
            <div class="columns">
                <div class="column is-4 is-offset-4">
                    <div id="lp-dropdown" class="no-pad dropdown  has-text-centered full-wide">
                        <div class="dropdown-trigger has-text-centered full-wide">
                            <button class="button has-text-centered full-wide " aria-haspopup="true" aria-controls="dropdown-menu">
                                <span class="trigger-text lil-side-margin">What is your destination?</span>
                                <span><i class="trigger-text lil-side-margin caret fas fa-angle-down"></i></span>
                            </button>
                        </div>
                        <div class="dropdown-menu has-text-centered full-wide" id="dropdown-menu" role="menu">
                            <div class="dropdown-content">
                                <a class="dropdown-item" href="<?php print home_url(); ?>/vegas/">Vegas</a>
                                <a class="dropdown-item" href="<?php print home_url(); ?>/miami/">Miami</a>
                                <a class="dropdown-item" href="<?php print home_url(); ?>/new-york/">New York</a>
                                <a class="dropdown-item" href="<?php print home_url(); ?>/los-angeles/">Los Angeles</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>  
        </div> <!-- /.row -->
    </div>  

<?php get_footer(); ?>
