<div class="shop-description">
  <div class="shop-description__wrapper">
    <div class="shop-description__title">Description:</div>
    <div class="shop-description__content">
      @php
        global $post, $product;
        $categ = $product->get_categories();
        $term = get_term_by ( 'name' , strip_tags($categ), 'product_cat' );
        if($term->description) {
          echo $term->description;
        }
      @endphp                  
    </div>                
  </div>
</div> 