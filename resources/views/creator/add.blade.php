@extends('layout.master')

@section('title', __('creator.add_creation'))
@section('content')
@include('layout.navbar')
@include('layout.navbarPop')

@include('components.creator.add')

@include('layout.footer')