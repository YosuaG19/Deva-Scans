@extends('layout.master')

@section('title', "Chapter XX | Title Here")

@section('content')

@include('components.series.chapter')
@include('components.series.reaction')

@include('layout.footer')
@endsection
