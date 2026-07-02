@extends('layout.master')

@section('title', __('creator.creator_title'))
@section('content')
@include('layout.navbar')
@include('layout.navbarPop')

@include('components.creator.series')

@include('layout.footer')