<section class="pdt-section pdt-section-common">
    <div class="container">
        <div class="product-wrapper row js_products__list" id="productData">
            <!-- all product goes here-->

            @foreach ($page->products as $product)
            @if (empty($product->pivot->external_offer_id))
            @continue
            @endif
            <div class="product-section product-section6 col-lg-3 col-12">
                <div class="product-block">
                    <div class="pdtImageWrapper position-relative">
                        <img class="prod_img6" src="/images/{{ $product->images[0]->image }}">
                        <div class="pdt-overlay"></div>
                    </div>
                    <div class="product-details">
                        <!-- <p class="prod_category6">Garden</p> -->
                        <h5 class="product-title product-name6">{{ $product->name }}</h5>
                        <div class="pdt-price-wrapper">
                            <p class="prod_price6">
                                <span> ${{ $product->price }} </span>
                            </p>
                        </div>
                    </div>
                    <div class="bottom-btn">
                        <a href="/products/{{ $product->slug }}" class="btn_shop btn_shop6 cart-text" id="btn_shop">Select
                            Product</a>
                        <i class="fal fa-plus"></i>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>