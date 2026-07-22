@extends('layout.master')

@php
    $ch_title = $chapter->title
@endphp

@section('title', __('series.chapter') . ' ' . $chapter->numbering . '  |  ' . $ch_title)

@section('content')

<x-series.chapter :comic='$comic' :fc='$fc' :lc='$lc' :chapter='$chapter'/>
@include('components.series.chapterNavigation')

<div class="flex flex-col items-center mx-auto bg-[#151515] rounded-lg h-fit md:w-[80%] w-[95%] p-6 mt-6 gap-4">
    <span class="flex flex-col item-center text-center text-white">
        <h2 class="text-sm font-semibold">{{ __('series.reaction_chapter_title') }}</h2>
        <p class="text-[.55rem]">{{$ttl_reaction}} {{ __('series.reactions') }}</p>
    </span>
    <x-series.reaction :reaction='$reaction'/>

    <x-series.chat :object='$chapter'/>
    {{-- @include('components.series.chat') --}}
</div>

@include('layout.footer')
@endsection
