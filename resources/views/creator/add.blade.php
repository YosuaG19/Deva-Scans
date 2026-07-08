@extends('layout.master')

@section('title', "Add Creation")
@section('content')
@include('layout.navbar')
@include('layout.navbarPop')

@include('components.creator.add')

@include('layout.footer')