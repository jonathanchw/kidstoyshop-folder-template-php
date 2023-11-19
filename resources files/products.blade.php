@extends('layouts.pages.index')
@section('head')
@include('templates.kidstoyshop.views.heads')
@endsection
@section('body_class', 'inner-page')
@section('content')
@include('templates.kidstoyshop.views.header')
@include('templates.kidstoyshop.views.all-products')
@include('templates.kidstoyshop.views.footer')
@endsection
@section('scripts')
<script type="text/javascript" src="js/jquery-3.6.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

@endsection