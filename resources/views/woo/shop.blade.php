@php if(!defined('ABSPATH')) { exit; } @endphp
@extends('layouts.app')
@section('content')

    
      @if(woocommerce_product_loop())
        <div class="shop-header">
          <div class="shop-header__container">
            <div class="shop-header__location">
              <h1 class="shop-header__title">
                {!! woocommerce_page_title(false) !!}
              </h1>
              @php woocommerce_breadcrumb(); @endphp 
            </div>

            <div class="shop-header__sort">
              @php do_action('woocommerce_before_shop_loop'); @endphp
            </div>
          </div>
        </div>  

        <div class="shop-content">
          <div class="shop-content__container">
            <ul class="shop-content__products">

              @if(wc_get_loop_prop('total'))
                @while(have_posts())
                  @php
                    the_post();
                    do_action('woocommerce_shop_loop');
                    wc_get_template_part('content', 'product');
                  @endphp
                @endwhile
              @endif

              @php do_action('woocommerce_after_shop_loop'); @endphp
            </ul>

            @include('woo.shop-description')
          </div>
        </div>
      @else

        @php
          do_action('woocommerce_no_products_found');
        @endphp
      @endif
 

@endsection