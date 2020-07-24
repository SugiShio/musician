<nav id="js-menu">
  <ul class="y-header__menu">
    <li class="y-header__accordion js-menu_accordion">
      <span class="y-header__item" @click='toggleIsOpen'>
        Classes
      </span>
      <transition name='fade'>
        <ul class="y-header__accordionMenu" v-show="isOpen">
          <li>
            <a class="y-header__accordionItem" href="<?php echo get_post_type_archive_link( 'flamenco' ); ?>">
              Flamenco
            </a>
          </li>
          <li>
            <a class="y-header__accordionItem" href="<?php echo get_post_type_archive_link( 'yoga' ); ?>">
              Yoga
            </a>
          </li>
        </ul>
      </transition>
    </li>
    <li>
      <a class="y-header__link" href="<?php echo get_post_type_archive_link( 'access' ); ?>">Access</a>
    </li>
    <li>
      <a class="y-header__link" href="<?php echo get_post_type_archive_link( 'live' ); ?>">Live</a>
    </li>
    <li>
      <a class="y-header__link" href="<?php echo get_permalink(get_page_by_path( 'profile' )); ?>">Profile</a>
    </li>
    <li>
      <a class="y-header__link" href="<?php echo get_post_type_archive_link( 'photo' ); ?>">Photo</a>
    </li>
    <li>
      <a class="y-header__link" href="<?php echo get_permalink(get_page_by_path( 'contact' )); ?>">Contact</a>
    </li>
    <li>
      <a class="y-header__link" href="<?php echo get_post_type_archive_link( 'qa' ); ?>">Q&A</a>
    </li>
  </ul>
</nav>