@extends('layouts.pages.index')

@section('head')
@include('templates.kidstoyshop.views.heads')
@endsection

@section('body_class', 'inner-page')
@section('content')
@include('templates.kidstoyshop.views.header')

<section class="pdt-section single-pdt">
    <div class="container" id="products">
        <div class="product-wrapper row" id="single_pdt_id">

            @if(!empty($product->images) && count($product->images) > 0)
            <div class="pdt-image col-lg-5 col-12">
                <img src="/images/{{ $product->images[0]->image }}" class="img-fluid pdt-image" id="single_pdt_link">
            </div>
            @endif

            <div class="pdt-image col-lg-7 col-12">
                <div class="breadcrumb-col">
                    <p>
                        <a href="/">Home</a> /
                        <a href="javascript:void(0);">{{$product->name ?? ""}}</a>
                    </p>
                </div>
                <div class="title-col">
                    <h2>{{$product->name ?? ""}}</h2>
                </div>
                <div>
                    <p style="margin-bottom: 0; font-size:15px;">{{$product->bill_model ?? "One Time Sale"}}</p>
                </div>
                <div style="font-size: 20px;">

                    <p style="margin-bottom: 5px;">
                        Shipping: $<span>0{{$product->shipping_price ?? "0.00"}}</span>
                    </p>
                </div>
                <div class="price-col">
                    <p>
                        Total: $<span id="single_pdt_price"> Price: ${{$product->price}}</span>
                    </p>
                </div>

                <div class="size-opts">
                    <ul class="proSize-ul">

                    </ul>
                </div>
                <div class="pdt-add">
                    <div class="pdt-button">
                        <a href="/cart">
                            <button type="button" class="btn btn-primary btn-cart shop-btn-color" onclick="addToCart({{json_encode($product)}})">Add to cart</button>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container" id="products_desc">
        <div class="product-wrapper row">
            <div class="tab-desc col-lg-12 col-12">
                <div class="panel with-nav-tabs panel-default">
                    <div class="panel-heading">
                        <ul class="nav nav-tabs nav_tabs">
                            <li class="active"><a href="#desc" data-toggle="tab">Description</a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane in active" id="desc">
                                @if(!empty($product->content))
                                {!!$product->content ?? ""!!}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('templates.kidstoyshop.views.footer')
@endsection

@section('scripts')
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/Cart.js"></script>
@endsection