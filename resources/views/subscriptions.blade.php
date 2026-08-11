@extends('layout.master')

@section('title', "Subscribe to Enlightened | Deva Scan")
@section('content')

@include('layout.navbar')

@include('components.subscription.banner')
@include('components.subscription.info')
@include('components.subscription.card')
@include('layout.footer')
@endsection