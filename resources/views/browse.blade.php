@extends('layout.master')

@section('title', "Browse | Deva Scan")
@section('content')
@include('layout.navbar')
@include('components.browse.banner')
@include('components.browse.series')
@include('layout.footer')