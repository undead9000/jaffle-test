<header class="navigation">
  <div class="container">
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
    <div class="navigation-buttons">
        <div class="navigation-buttons__icons">
            <a class="navigation-buttons__pin" href="#"></a>
            <a class="navigation-buttons__like" href="#"></a>
            <a class="navigation-buttons__profile" href="#"></a>
        </div>
        <a class="navigation-buttons__order" href="#">
            <span class="navigation-buttons__inner">Order</span>
        </a>
    </div>    
  </div>
</header>
