<header class="navigation">
  <div class="navigation__container">
    <div class="navigation__menu">
        <a class="navigation__toggle">
          <span></span>
          <span></span>
          <span></span>
        </a>
        <nav class="navigation__primary"> 
          <ul class="navigation__wrapper">
            <?php wp_nav_menu( array('menu' => 'main-menu-first', 'items_wrap' => '%3$s', 'container' => '%3$s' ) ); ?>
            <?php wp_nav_menu( array('menu' => 'main-menu-second', 'items_wrap' => '%3$s', 'container' => '%3$s' ) ); ?>  
          </ul>       
        </nav>       
        <a class="navigation__logo" href="{{ home_url('/') }}">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/logo.svg" title="{{ get_bloginfo('name', 'display') }}">
        </a>
    </div>
    <div class="navigation__search">
        @include('partials.searchform')
    </div>
    <div class="nav-buttons">
        <div class="nav-buttons__icons">
            <a class="nav-buttons__pin" href="#"></a>
            <a class="nav-buttons__like" href="#"></a>
            <a class="nav-buttons__profile" href="#"></a>
        </div>
        <a class="nav-buttons__order" href="#">
            <span class="nav-buttons__inner">Order</span>
        </a>
    </div>    
  </div>
</header>
