<li>
  <a href="@php the_permalink(); @endphp" class="shop-content__item">
    @php do_action( 'woocommerce_before_shop_loop_item_title' ) @endphp

    <div class="shop-content__details">
      <h3>@php the_title() @endphp</h3>
      @php do_action( 'woocommerce_after_shop_loop_item_title' ) @endphp
      @include('woocommerce.loop.discount-message')
    </div>         
  </a>     
</li>