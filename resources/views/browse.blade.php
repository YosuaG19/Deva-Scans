
@extends('layout.master')

@section('title', __('browse.page_title'))
@section('content')
@include('layout.navbar')

<x-browse.banner :comics='$comics' :sorts='$sorts' :types='$types' :status='$status' :genres='$genres' />

<x-browse.series :comics='$comics'/>
@include('layout.footer')