<section class="m-top">
  <h1 class="m-top__title">
    <span class="m-top__main"><?php echo $GLOBALS['site_title'];; ?></span><br>
    <span class="m-top__sub"><?php echo $GLOBALS['subtitle'];; ?></span>
  </h1>
  <nav class="m-top__menuWrapper">
    <ul class="m-top__menu">
    <?php foreach(array_slice($GLOBALS['page_config'], 1) as $page) : ?>
      <li class="m-top__menuItem">
        <router-link to='/<?php echo $page['id']; ?>/'><?php echo $page['label']; ?></router-link>
      </li>
    <?php endforeach; ?>
    </ul>
    <ul class="m-top__medias">
      <?php foreach($GLOBALS['medias'] as $media) : ?>
      <li class="m-top__media">
        <a href="<?php echo $media['url']; ?>" target="_blank"><i class="icon-<?php echo $media['name']; ?>"></i></a>
      </li>
      <?php endforeach; ?>
    </ul>
  </nav>
</section>