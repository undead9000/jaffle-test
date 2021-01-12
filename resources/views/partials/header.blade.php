<header class="navigation">
  <div class="navigation__container">
    <div class="navigation__menu">
        <nav class="nav-primary">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
          @endif
        </nav>    
        <a class="brand" href="{{ home_url('/') }}">
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
