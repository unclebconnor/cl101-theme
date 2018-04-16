<header class="container is-fluid columns">
    <!-- <div class="columns"> -->
        <div class="column is-3">
            <a href="<?php print home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt="Clubbing 101 Logo" id="logo-image"/></span>   
            </a>
        </div>
        <!-- each a tag gets url of parent and apends rest of path -->
        <nav class="main-nav column is-9">
        	<div>
        		<a href="<?php print get_permalink($post->post_parent) ?>">
        			<?php print get_the_title($post->post_parent); ?>
        		</a>
        	</div>
        	<div>
        		<a href="<?php print get_permalink($post->post_parent); ?>about/"> 
        			About
        		</a>
        	</div>
        	<div>
        		<a href="<?php print get_permalink($post->post_parent); ?>how-it-works/">
        			How It Works
        		</a>
        	</div>
        	<div>
        		<a href="<?php print get_permalink($post->post_parent); ?>faqs/">
        			FAQ's
        		</a>
        	</div>
        </nav>
    <!-- </div> -->
         
</header>