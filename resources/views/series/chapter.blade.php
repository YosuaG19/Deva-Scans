@extends('layout.master')

@section('title', __('series.chapter') . ' XX | Title Here')

@section('content')

@include('components.series.chapter')
@include('components.series.reaction')

@include('layout.footer')
@endsection
