@php if(!defined('ABSPATH')) { exit; } @endphp
@php global $post, $product; @endphp

@php 
  if( $product->is_on_sale() ) { 
    $regular_price = $product->get_regular_price();
    $sale_price = $product->get_sale_price();
    $discount = (floatval($regular_price) - floatval($sale_price)) / floatval($regular_price) * 100;
@endphp

  <div class="shop-content__discount">
    {{ $discount }}% off at Checkout
  </div>

@php } @endphp