@extends('layout.master')

@section('title', __('creator.creator_title'))
@section('content')
@include('layout.navbar')
@include('layout.navbarPop')

<x-creator.series :created="$created"/>

@include('layout.footer')