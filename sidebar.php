<div class="column is-3 is-offset-1 blog-sidebar">
    <div>
        <h4>About</h4>
        <p><?php the_author_meta('description'); ?></p>
    </div>
    <div class="sidebar-module">
        <h4>Archives</h4>
        <ol class="list-unstyled">
            <?php wp_get_archives('type=monthly'); ?>
        </ol>
    </div>
    <div class="sidebar-module">
        <h4>Follow Us</h4>
        <ol class="list-unstyled">
            <li><a href="https://www.instagram.com/clubbing101/">Instagram (add icon)</a></li>
            <li><a href="https://www.linkedin.com/company/clubbing101/">Linkedin (add icon)</a></li>
            <li><a href="https://www.facebook.com/clubbing101/">Facebook (add icon)</a></li>
        </ol>
    </div>
</div><!-- /.blog-sidebar -->