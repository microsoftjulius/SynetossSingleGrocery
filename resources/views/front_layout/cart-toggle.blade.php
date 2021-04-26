<div class="bs-canvas bs-canvas-left position-fixed bg-cart h-100">
        <div class="bs-canvas-header side-cart-header p-3 ">
            <div class="d-inline-block  main-cart-title">My Cart <span>({{ $user_cart }} Items)</span></div>
            <button type="button" class="bs-canvas-close close" aria-label="Close"><i class="uil uil-multiply"></i></button>
        </div>
        <div class="bs-canvas-body">
            <div class="cart-top-total">
                <div class="cart-total-dil">
                    <h4>Gambo Super Market</h4>
                    <span>${{ $total_amount }}</span>
                </div>
                <div class="cart-total-dil pt-2">
                    <h4>Delivery Charges</h4>
                    <span>${{ $delivery_charges }}</span>
                </div>
            </div>
            <div class="side-cart-items">
                @foreach ($items_in_cart as $item)
                    <div class="cart-item">
                        <div class="cart-product-img">
                            <img src="{{asset('images/item/'.$item->image)}}" alt="">
                            <div class="offer-badge">{{ $item->discount * 100 }}% OFF</div>
                        </div>  
                        <div class="cart-text">
                            <h4>{{ $item->item_name }}</h4>
                            <div class="cart-radio">
                                <ul class="kggrm-now">
                                    <li>
                                        <input type="radio" id="a1" name="cart1">
                                        <label for="a1">0.50</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="a2" name="cart1">
                                        <label for="a2">1kg</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="a3" name="cart1">
                                        <label for="a3">2kg</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="a4" name="cart1">
                                        <label for="a4">3kg</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="qty-group">
                                <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus minus-btn">
                                    <input type="number" step="1" name="quantity" value="{{ $item->quantity }}" class="input-text qty text">
                                    <input type="button" value="+" class="plus plus-btn">
                                </div>
                                <div class="cart-item-price">${{ ($item->price - ($item->price * $item->discount)) * $item->quantity }} <span>${{ $item->price * $item->quantity}}</span></div>
                            </div>
                            <button type="button" class="cart-close-btn"><i class="uil uil-multiply"></i></button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="bs-canvas-footer">
            <div class="cart-total-dil saving-total ">
                <h4>Total Saving</h4>
                <span>${{ $total_saving }}</span>
            </div>
            <div class="main-total-cart">
                <h2>Total</h2>
                <span>${{ $total_amount + $delivery_charges }}</span>
            </div>
            <div class="checkout-cart">
                <a href="#" class="promo-code">Have a promocode?</a>
                <a href="#" class="cart-checkout-btn hover-btn">Proceed to Checkout</a>
            </div>
        </div>
    </div>