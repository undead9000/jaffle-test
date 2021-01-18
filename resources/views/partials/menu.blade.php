<nav class="menu">
  <div class="menu__wrap">
    <a class="menu__close"></a>
    <a class="menu__logo" href="{{ home_url('/') }}">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/logo.svg" title="{{ get_bloginfo('name', 'display') }}">
    </a>    
  </div>
  @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'first-menu', 'container' => '']) !!}
  @endif
  @if (has_nav_menu('secondary_navigation'))
    {!! wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'second-menu', 'container' => '', 'add_li_class'  => 'second-menu__li']) !!}
  @endif       
</nav>
<div class="overlay"></div>