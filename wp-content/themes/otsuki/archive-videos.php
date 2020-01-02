<?php get_header(); ?>
<main id="app" class="o-main">
  <div class="o-title">
    <h2>
      <img
        src="<?php echo get_template_directory_uri()."/assets/images/titles/".$GLOBALS['theme_name']."/videos.svg"; ?>"
        alt="videos">
    </h2>
    <span class="o-title__sub">動画</span>
  </div>
  <youtube-loader base-url="<?php echo get_site_url() ?>">"></youtube-loader>
</main>

<?php get_footer(); ?>