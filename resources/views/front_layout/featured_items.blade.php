<div class="col-md-12">
    <div class="owl-carousel featured-slider owl-theme">
        @php
            //getting all the items 
            $featured_item = App\Models\Item::join('item_images','item_images.item_id','item.id')
            ->join('variation','variation.item_id','item.id')
            ->select('item.*','item_images.image','variation.item_id','variation.price','variation.weight','variation.stock',
            'variation.variation_id','variation.discount')
            ->get();
            //get the item clicks, the one with max clicks, the id is sent into an array
            $item_with_max_clicks_array = [];
            $max_clicks = App\Models\Item::max('clicks');
            foreach ($featured_item as $item) {
                $item_with_max_clicks_id_one = App\Models\Item::max('clicks');
                $item_id = App\Models\Item::where('clicks',$item_with_max_clicks_id_one)->value('id');
                array_push($item_with_max_clicks_array,$item_id);
                /**
                 * getting the item with max clicks minus the element that was push to the array first
                 */
                $item_with_max_clicks_id_two = App\Models\Item::where('id','!=',$item_id)->max('clicks');
                $item2_id = App\Models\Item::where('clicks',$item_with_max_clicks_id_two)->value('id');
                array_push($item_with_max_clicks_array,$item2_id);
                
                $item_with_max_clicks_id_three = App\Models\Item::where('id','!=',$item_id)
                ->where('id','!=',$item2_id)
                ->max('clicks');
                $item3_id = App\Models\Item::where('clicks',$item_with_max_clicks_id_three)->value('id');
                array_push($item_with_max_clicks_array,$item3_id);

                $item_with_max_clicks_id_four = App\Models\Item::where('id','!=',$item_id)
                ->where('id','!=',$item2_id)->where('id','!=',$item3_id)
                ->max('clicks');
                $item4_id = App\Models\Item::where('clicks',$item_with_max_clicks_id_four)->value('id');
                array_push($item_with_max_clicks_array,$item4_id);
            }
        @endphp
        
        @foreach ($featured_item as $item)
            @if(in_array($item->id, $item_with_max_clicks_array))
                <div class="item" style="height: 300px">
                    <div class="product-item">
                        <a href="/check-product/{{ base64_encode($item->id * $id_multiplier) }}/{{ $random_string }}" class="product-img">
                            <img src="{{asset('images/item/'.$item->image)}}" alt="" style="height:180px">
                            <div class="product-absolute-options">
                                <span class="offer-badge-1">{{ $item->discount * 100 }}% off</span>
                                <span class="like-icon" title="wishlist"></span>
                            </div>
                        </a>
                        <div class="product-text-dt">
                            <p>Availability<span style="text-transform: capitalize">({{ $item->item_status }})</span></p>
                            <h4>{{ $item->item_name }}</h4>
                            <div class="product-price">${{ $item->price - ($item->price * $item->discount) }} <span>${{ $item->price}}</span></div>
                            <div class="qty-cart">
                                <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus minus-btn">
                                    <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                    <input type="button" value="+" class="plus plus-btn">
                                </div>
                                <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>