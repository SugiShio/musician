<?php get_header(); ?>
<section class="o-mainview">
  <p>Freelance Guitarist/Producer, based in Tokyo</p>
</section>

<?php /* Schedule */ ?>
<section class="o-show">
  <?php
  $posts = get_posts(array(
    'post_type' => 'schedule',
    'meta_key' => 'date',
    'order' => 'ASC'
  ));
  $post = $posts[0];
  setup_postdata( $post );
  $date = get_field('date');
  $place = get_field('place');
  ?>
  <h2 class="o-show__title">Upcoming show</h2>

  <div class="o-show__item">
    <time class="o-show__date" datetime="<?php echo $date; ?>">
      <?php echo date("Y.m.d D", strtotime($date));?>
    </time>
    <div class="o-show__itemtitle">
      <?php echo get_the_title(); ?>
      <?php if($place) : ?>
      &nbsp;@<?php echo $place; ?>
      <?php endif; ?>
    </div>
  </div>

  <?php wp_reset_postdata(); ?>
  <p>
    <a href="<?php echo get_post_type_archive_link('schedule'); ?>" class="o-show__morelink">
      More show
    </a>
  </p>
</section>

<?php
$post = get_post(get_page_by_path('config'));
setup_postdata( $post );
?>

<?php /* Video */ ?>
<section class="o-featuredvideo">
  <div class="o-featuredvideo__img">
    <img src="http://img.youtube.com/vi/<?php echo $GLOBALS['featured_video']; ?>/maxresdefault.jpg" alt="">
  </div>
  <?php /* Video 
  <iframe width="560" height="315"
  src="https://www.youtube.com/embed/<?php echo $GLOBALS['featured_video']; ?>?controls=0" frameborder="0"
  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  */ ?>
  <a href="<?php echo get_post_type_archive_link('videos'); ?>" class="o-featuredvideo__link">More videos</a>
</section>

<?php /* SNS */ ?>
<section class="o-sns">
  <ul class="o-sns__list">
    <?php foreach($GLOBALS['accounts'] as $account) : ?>
    <li class="o-sns__item">
      <a href="<?php echo $account['url']; ?>" target="_blank" class="o-sns__link">
        <div class="o-sns__icon">
          <img src="<?php echo get_template_directory_uri()."/assets/images/".$account['name'].".png"; ?>" alt="">
        </div>
        <div class="o-sns__id"><?php echo $account['id']; ?></div>
      </a>
    </li>
    <?php endforeach; ?>
  </ul>
</section>

<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>
