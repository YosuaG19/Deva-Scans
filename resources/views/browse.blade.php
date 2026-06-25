
@extends('layout.master')

@section('title', "Browse | Deva Scan")
@section('content')
@include('layout.navbar')

<x-browse.banner :sorts='$sorts' :types='$types' :status='$status' :genres='$genres'/>

@include('components.browse.series')
@include('layout.footer')