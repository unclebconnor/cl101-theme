<header class="level is-mobile">
    <!-- <div class="columns"> -->
        <div class="level-left">
            <a class="level-item" href="<?php print home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt="Clubbing 101 Logo" id="logo-image"/></span>   
            </a>
        </div>
        
        <!-- each a tag gets url of parent and apends rest of path -->
        <nav class="level-right is-hidden-mobile">
        	<!-- Full version -->
            <div class="level-item menu-item lil-side-margin">
        		<a href="<?php print get_permalink($post->post_parent) ?>">
        			<?php print get_the_title($post->post_parent); ?>
        		</a>
        	</div>
        	<div class="level-item menu-item lil-side-margin">
        		<a href="<?php print get_permalink($post->post_parent); ?>about/"> 
        			About
        		</a>
        	</div>
        	<div class="level-item menu-item lil-side-margin">
        		<a href="<?php print get_permalink($post->post_parent); ?>how-it-works/">
        			How It Works
        		</a>
        	</div>
        	<div class="level-item menu-item lil-side-margin">
        		<a href="<?php print get_permalink($post->post_parent); ?>faqs/">
        			FAQ's
        		</a>
        	</div>
        </nav>
        <nav class="level-right is-hidden-tablet">
            <!-- hamburger version -->
            <div class="dropdown is-right">
                <div id="hamburger-button" class="dropdown-trigger level-item menu-item ">
                    <button  class="button hamburger-button" aria-haspopup="true" aria-controls="dropdown-menu">
                      <span><i class="fas fa-bars"></i></span>
                    </button>
                </div>
                <div class="dropdown-menu" id="dropdown-menu" role="menu">
                    <div class="dropdown-content menu-dropdown-wrapper">
                        <a class="dropdown-item menu-item" href="<?php print get_permalink($post->post_parent) ?>">
                            <?php print get_the_title($post->post_parent); ?>
                        </a>
                        <a class="dropdown-item menu-item" href="<?php print get_permalink($post->post_parent); ?>about/"> 
                            About
                        </a>
                        <a class="dropdown-item menu-item" href="<?php print get_permalink($post->post_parent); ?>how-it-works/">
                            How It Works
                        </a>
                        <a class="dropdown-item menu-item" href="<?php print get_permalink($post->post_parent); ?>faqs/">
                            FAQ's
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    <!-- </div> -->
         
</header>