@extends('layouts.pages.index')

@section('head')
@include('templates.kidstoyshop.views.heads')
@endsection

@section('body_class', 'front-page')
@section('content')
@include('templates.kidstoyshop.views.header')

<section>
    <div class="banner-section6">
        <div class="banner overlay-background d-md-flex align-items-center">
            <div class="container">
                <div class="row d-md-flex align-items-start">
                    <div class="col banner-wrapper">
                        <div class="head-title">
                            <h1 class="banner-heading-color">
                                <span>{{ $content -> top_banner_title ?? ''}}</span>
                            </h1>
                            <p class="banner-tagline-color">
                                <span>{{ $content -> top_banner_description ?? ''}}</span>
                            </p>
                            <a href="/products" class="btn btn-primary mt-3 arrow position-relative banner-btn-color">
                                Select Product <img src="./images/design/shape1.png" alt="" />
                                <img src="./images/design/shape2.png" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-section about-section6 position-relative">
        <div class="about-animation-img">
            <img src="./images/design/shape3.png" alt="" />
        </div>
        <div class="container-fluid">
            <div class="row h-100 height-auto justify-content-center align-items-center">
                <div class="col-12 col-md-6 left-col h-100">.</div>
                <div class="col-12 col-md-6 h-100 d-flex flex-column justify-content-center">
                    <div class="about-data">
                        <h2>{{ $content -> welcome_banner_title ?? ''}}</h2>
                        <p><span>{{ $content -> welcome_description ?? ''}}</span></p>
                        <a href="/products" class="btn btn-primary mt-3 arrow position-relative banner-btn-color">
                            Select Product <img src="./images/design/shape1.png" alt="" />
                            <img src="./images/design/shape2.png" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('templates.kidstoyshop.views.all-products')
<section class="box-section6">
    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="box-col-wrap">
                        <i class="far fa-truck"></i>
                        <h3>{{ $content -> benefits_key_title_1 ?? 'USA Wide Delivery'}}</h3>
                        <p>{{ $content -> benefits_key_description_1 ?? 'We ship our products anywhere in America'}}</p>
                        <img src="./images/design/support-shape1.png" alt="" />
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="box-col-wrap">
                        <i class="far fa-user-headset"></i>
                        <h3>{{ $content -> benefits_key_title_2 ?? 'Online Support'}}</h3>
                        <p>
                        {{ $content -> benefits_key_description_2 ?? 'Very responsive customer support to help solve your issues'}}
                        </p>
                        <img src="./images/design/support-shape1.png" alt="" />
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="box-col-wrap">
                        <i class="far fa-coins"></i>
                        <h3>{{ $content -> benefits_key_title_3 ?? 'Hottest Deals'}}</h3>
                        <p>{{ $content -> benefits_key_description_3 ?? 'We provide amazing offers on our products'}}</p>
                        <img src="./images/design/support-shape1.png" alt="" />
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

<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

@endsection