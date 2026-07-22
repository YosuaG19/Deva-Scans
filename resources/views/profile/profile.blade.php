@extends('layout.master')

@section('title', __('profile.profile_page_title'))
@section('content')
@include('layout.navbar')
@include('components.profile.banner')

<div class="home-cont">

    <div class="series-cont gap-4">
        <div class="flex gap-4">
            <button class="text-[#FFD700] uppercase font-semibold">{{ __('profile.bookmarks') }}</button>
            {{-- <button class="text-[#FFD700] uppercase font-semibold">{{ __('profile.your_comics') }}</button> --}}
        </div>
        <div class="series-layout">
            @foreach ($bookmark as $comic)
                <x-series.card :comic="$comic"/>
            @endforeach
        </div>
    </div>

    <div class="series-cont gap-2">
        <h2 class="text-[#FFD700] text-xl font-bold uppercase">{{ __('profile.history') }}</h2>

        <div class="series-layout-vert">
            @foreach ($history as $comic)
                <x-series.cardVert :comic='$comic'/>
            @endforeach
        </div>
    </div>
</div>

@include('layout.footer')