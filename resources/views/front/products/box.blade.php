   <div class="product-card">
       <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->trans_name }}">
       <div class="product-info">
           <div class="product-title">
               <h3>{{ $product->trans_name }}</h3>
           </div>

           <div class="price">
               @if ($product->sale_price)
                   <span class="current-price">{{ $product->sale_price }}$</span>
                   <del class="old-price">{{ $product->price }} $</del>
               @else
                   <span class="current-price">{{ $product->price }}$</span>
               @endif
           </div>

           <div class="review">
               <i class="bx bxs-star"></i> ({{ $product->reviews->count() }} Reviews)
           </div>

           <div class="card-actions">
               <a class="add-to-cart" href="#">{{ __('website.add_to_card') }}</a>
               <a class="view-details"
                   href="{{ route('front.product', $product->id) }}">{{ __('website.view_details') }}</a>
           </div>
       </div>
   </div>
