@extends('layout.master')

@section('title', "Edit Profile")
@section('content')

@include('layout.navbar')

@include('components.subscription.card')
@include('components.subscription.info')
{{-- @include('components.subscription-card') --}}
@include('components.subscription.faq')
