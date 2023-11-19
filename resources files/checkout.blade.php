<!--@extends('layouts.pages.index')-->

@section('head')
@include('templates.kidstoyshop.views.heads')
@endsection

@section('body_class', 'inner-page')
@section('content')
@include('templates.kidstoyshop.views.header')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-4">Checkout</h1>
        </div>

        <div class="col-12">
            <div class="order-heading py-3 px-4 d-flex justify-content-between rounded-2 mt-5 mb-4">
                <span class="text-white font-weight-normal">Order Info</span>
            </div>

            <div class="row">
                <div class="col-12 cart-inner">

                    <div class="table-responsive">
                        <table class="table table-cart" style="width: 100%">
                            <thead>
                                <tr>
                                    <td>
                                        <p>Image</p>
                                    </td>
                                    <td colspan="3">
                                        <p>Product</p>
                                    </td>
                                    <td>
                                        <p>Billing</p>
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
                                    <td id="qty-column-header" class="d-none">
                                        <p>Quantity</p>
                                    </td>
                                </tr>
                            </thead>
                            <tbody id="checkout-table"></tbody>
                        </table>
                    </div>
                </div>
            </div>

            <form class="w-100 order-form" id="checkout_form">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <h3 class="form-heading mb-3">Billing Details</h3>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                <div class="form-group">
                                    <label>First Name:<sup>*</sup></label>
                                    <input type="text" class="form-control" name="firstName" placeholder="First Name" id="firstName" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                <div class="form-group">
                                    <label>Last Name:<sup>*</sup></label>
                                    <input type="text" class="form-control" name="lastName" placeholder="Last Name" id="lastName" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Street Address:<sup>*</sup></label>
                            <input type="text" class="form-control" name="address" placeholder="Street Address" id="shippingAddress1" />
                        </div>
                        <div class="form-group">
                            <label>Town/City:<sup>*</sup></label>
                            <input type="text" class="form-control" name="city" placeholder="Town/City" id="shippingCity" />
                        </div>
                        <div class="form-group">
                            <label>Country:<sup>*</sup></label>
                            <input type="text" class="form-control" name="shippingCountry" id="shippingCountry" placeholder="Country" value="US" readonly />
                        </div>
                        <div class="form-group">
                            <label>State:<sup>*</sup></label>

                            <select name="shippingState" id="state-select" class="form-control">
                                <option value="">Select State</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>ZIP:<sup>*</sup></label>
                            <input type="text" class="form-control" name="zipCode" placeholder="Zip Code" id="shippingZip" />
                        </div>
                        <div class="form-group">
                            <label>Phone:<sup>*</sup></label>
                            <input type="text" class="form-control form-control--sm" name="phone" ng-model="FullFormData.phone" ng-model="FullFormData.phone" id="phone" placeholder="Phone Number" />
                        </div>
                        <div class="form-group">
                            <label>Email Address:<sup>*</sup></label>
                            <input type="text" id="email" class="form-control" name="email" placeholder="Email Address" />
                        </div>
                        <h3 class="form-heading mt-5 mb-3">Additional Information</h3>
                        <div class="form-group">
                            <label>Order Notes:(optional)</label>
                            <textarea id="order-notes" name="notes" placeholder="Order Notes"></textarea>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <h3 class="form-heading mb-3">Your Order</h3>
                        <p id="p_name_all"></p>
                        <table class="table mb-5" id="order-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2">Subtotal</td>
                                    <td>
                                        <span id="cartDetails-subtotal" value="0.00">0.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Shipping</td>
                                    <td>
                                        <span id="shipping_subtotal" value="0.00">0.00</span>
                                    </td>
                                </tr>
                                <tr id="shipping-insurance-tr" style="display: none">
                                    <td colspan="2">Shipping Insurance</td>
                                    <td>
                                        <span id="shipping-insurance-price" value="0.00">1.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Total</td>
                                    <td>
                                        <span id="cartDetails-total" value="0.00">0.00</span>
                                    </td>
                                    <input type="hidden" name="order_total_value" value="" />
                                </tr>
                            </tfoot>
                        </table>
                        <div class="payment mb-4">
                            <div class="payment-header d-flex justify-content-between px-3 py-3 align-items-center">
                                <label class="mb-0">
                                    <!-- <input type="radio" name="payment" id="radio1"> -->
                                    <span for="radio1"></span>
                                    Payment Details
                                </label>
                                <div class="d-inline-flex">
                                    <img src="images/mastercard.png" />
                                    <img src="images/discover.png" />
                                    <img src="images/visa.png" />
                                </div>
                            </div>
                            <div class="payment-form px-3 py-3 row m-0">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control--sm" placeholder="Card No" name="cardNumber" data-threeds="pan" ng-model="FullFormData.cc_number" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <select class="form-control" name="month" id="month-select">
                                            <option value="" selected="selected">
                                                Month(MM)
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <select class="form-control" name="creditcardexpyear" id="year-select">
                                            <option value="" selected="selected">
                                                Year(YYYY)
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control" name="CVV" placeholder="CVV" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0)" onClick="popop_cvv()" class="ml-4 cvv">
                                        What is This
                                    </a>
                                </div>
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <img id="cvv-img" src="images/cvv.jpg" style="display: none" />
                                </div>
                            </div>
                        </div>
                        <div class="form-btn p-4">
                            <label for="vehicle1" class="agree" style="font-size: 15px">
                                <input type="checkbox" id="flexCheckChecked" name="agreeCheckbox" value="" />
                                You agree with
                                <a href="terms.html" target="_blank">Terms and Conditions</a>
                                and
                                <a href="privacy.html" target="_blank">Privacy Policy.</a>
                            </label>

                            <div id="prodTerms">
                                <input type="checkbox" id="prod_agree" name="prod_agree" class="agree" value="" />
                                By placing an order you will be billed $<span class="total_price" id="cart-total"></span>
                                ($<span class="total_price" id="cart-total"></span> + $<span id="ship_price">0</span>
                                for shipping) for <span id="prod_name"></span>. This is a
                                one-time purchase. Shipment via USPS typically takes 3-5
                                business days. Your credit card will be billed as
                                <span class="js_website-desc"></span> on your statement.
                            </div>
                            <button type="submit" class="btn-order" id="form-btn">
                                Place Order
                            </button>
                        </div>
                    </div>
                </div>
            </form>


        </div>
    </div>
</div>

<div class="popup-overlay fancybox-popup" id="error_modal" style="display: none">
    <div class="popup-inner">
        <span class="popup-close" id="popup-close">X</span>
        <div id="error_pop" style="text-align: left"></div>
    </div>
</div>


@include('templates.kidstoyshop.views.footer')
@endsection