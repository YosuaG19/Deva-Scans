@extends('layout.master')

@section('title', "Creator | Deva Scan")
@section('content')
@include('layout.navbar')
@include('layout.navbarPop')

@include('components.creator.series')

@include('layout.footer')