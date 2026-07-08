@extends('layout.master')

@section('title',  __('creator.manage_creation'))
@section('content')
@include('layout.navbar')
@include('layout.navbarPop')

@include('components.creator.manage')

@include('layout.footer')