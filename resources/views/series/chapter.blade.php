@extends('layout.master')

@section('title', __('series.chapter') . ' XX | Title Here')

@section('content')

@include('components.series.chapter')
@include('components.series.chapterNavigation')

<div class="flex flex-col items-center mx-auto bg-[#151515] rounded-lg h-fit md:w-[80%] w-[95%] p-6 mt-6 gap-4">
    <span class="flex flex-col item-center text-center text-white">
        <h2 class="text-sm font-semibold">{{ __('series.reaction_chapter_title') }}</h2>
        <p class="text-[.55rem]">xxx {{ __('series.reactions') }}</p>
    </span>
    <x-series.reaction/>
    @include('components.series.chat')
</div>

@include('layout.footer')
@endsection
