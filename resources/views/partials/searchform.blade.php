<form role="search" method="get" class="search-form" action="{{ esc_url( home_url( '/' ) ) }}">
  <label>
    <span class="screen-reader-text">{{ _x( 'Search for:', 'label' ) }}</span>
    <input type="search" class="navigation__searchfield" placeholder="{!! esc_attr_x( 'Search', 'placeholder' ) !!}" value="{{ get_search_query() }}" name="s" />
  </label>
</form>