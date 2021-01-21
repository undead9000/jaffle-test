<header class="navigation">
  <div class="navigation__container">
    <div class="navigation__menu">
        <a class="navigation__toggle">
          <div></div>
          <div></div>
          <div></div>
        </a>    
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
        <a class="nav-buttons__order" href="{{ get_permalink(woocommerce_get_page_id( 'shop' )) }}">
            <span class="nav-buttons__inner">Order</span>
        </a>
    </div>    
  </div>
</header>
