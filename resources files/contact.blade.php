@extends('layouts.pages.index')
@section('head')
@include('templates.kidstoyshop.views.heads')
@endsection
@section('body_class', 'inner-page')
@section('content')
@include('templates.kidstoyshop.views.header')
<div class="py-5">
    <div class="container">
        <h1>Contact Us</h1>
        <p>
            Got a question? Have some feedback to share? We'd love to hear from
            you!
        </p>
        <p><b>Customer Service Hours</b></p>
        <p>
            Our support staff are ready to assist you 9:00AM - 5:00PM EST Monday
            through Friday.
        </p>
        <p><b>Contact Info</b></p>
        <p><span class="js_website-name"></span></p>
        <p><span class="js_website-corp"></span></p>
        <p><a href="" class="js_website-email"></a></p>
        <p><a href="" class="js_website-phone"></a></p>
        <p><span class="js_website-address"></span></p>
        <p><b>Returns</b></p>
        <p><span class="js_website-return-partner">Fulfillmentx LLC</span></p>
        <p><span class="js_website-return-address"></span></p>
        <!-- <p><b>Cancellations</b></p>
   <p>You can cancel your recurring order anytime. Click <a href="cancellation.html" taget="_blank" >here</a> to submit your product cancellation request.</p> -->
    </div>
</div>



@include('templates.kidstoyshop.views.footer')
@endsection
@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>


@endsection