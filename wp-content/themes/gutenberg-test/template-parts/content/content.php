<article>
  <header class="entry-header">
  <?php
		the_content();
  ?>

  <hr>

  <?php
  if ( ! function_exists( '_wp_render_title_tag' ) ) {
    function theme_slug_render_title() {
  ?>
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <?php
    }
    add_action( 'wp_head', 'theme_slug_render_title' );
  }
  ?>
  </header><!-- .entry-header -->
</article>