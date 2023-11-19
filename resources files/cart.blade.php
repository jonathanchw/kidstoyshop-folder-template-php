@extends('layouts.pages.index')

@section('head')
@include('templates.kidstoyshop.views.heads')
@endsection

@include('templates.kidstoyshop.views.header')
@section('body_class', 'inner-page')
@section('content')

<section class="pdt-section single-cart">
    <div class="container">
        <div class="cart-wrapper row">
            <div class="cart-left-col col-lg-8 col-12">
                <div class="cart-contents row">
                    <div class="col-12 cart-inner">
                        <div class="table-responsive">
                            <table class="table table-cart" style="width: 100%">
                                <thead>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>
                                            <p>Image</p>
                                        </td>
                                        <td colspan="3">
                                            <p>Product</p>
                                        </td>
                                        <td>
                                            <p>Subtotal</p>
                                        </td>
                                        <td>
                                            <p>Shipping</p>
                                        </td>
                                        <td>
                                            <p>Total</p>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody id="cart-table"></tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 cart-button">
                        <a href="/products" class="btn btn-continue shop-btn-outline">
                            Continue Shopping
                        </a>
                        <a href="/checkout">
                            <button type="submit" class="btn btn-update shop-btn-color">
                                Proceed to checkout
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="cart-right-col col-lg-4 col-12">
                <div class="row">
                    <div class="col-12 sidebar-title-column">
                        <h2>Cart Details</h2>
                    </div>
                    <div class="col-12 sidebar-details-column">
                        <p>
                            <span class="TextLeft"> Subtotal </span>
                            <span class="TextRight">
                                <span id="cartDetails-subtotal">0.00</span>
                            </span>
                        </p>
                        <p>
                            <span class="TextLeft"> Shipping </span>
                            <span class="TextRight">
                                $<span id="shipping">0.00</span>
                            </span>
                        </p>
                        <p class="total-col">
                            <span class="TextLeft"> Total </span>
                            <span class="TextRight"><span id="cartDetails-total">0.00</span>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('templates.kidstoyshop.views.footer')
@endsection

@section('scripts')
<script type="text/javascript" src="js/jquery-3.6.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
<script src="js/Cart.js"></script>
@endsection