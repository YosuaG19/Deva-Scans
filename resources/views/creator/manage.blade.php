@extends('layout.master')

@section('title', "Manage Creation")
@section('content')
@include('layout.navbar')
@include('layout.navbarPop')

@include('components.creator.manage')

@include('layout.footer')