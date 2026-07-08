
@extends('layout.master')

@section('title', __('browse.page_title'))
@section('content')
@include('layout.navbar')

<x-browse.banner :sorts='$sorts' :types='$types' :status='$status' :genres='$genres'/>

@include('components.browse.series')
@include('layout.footer')