@extends('layout.master')

@section('title', __('series.details_title') . $comic->title)

@section('content')
@include('layout.navbar')

<div class="home-cont">

    {{-- LEFT SIDE --}}
    <x-series.detailSidebar :comic='$comic'/>
    
    {{-- RIGHT SIDE COMPONENT --}}
    <x-series.detailContent :comic='$comic' :fc='$fc' :lc='$lc' :history="$history" />
</div>

<div class="flex flex-col items-center mx-auto bg-[#151515] rounded-lg h-fit md:w-[80%] w-[95%] p-6 mt-6 gap-4">
    <span class="flex flex-col item-center text-center text-white">
        <h2 class="text-sm font-semibold">{{ __('series.reaction_series_title') }}</h2>
        <p class="ttl-reaction text-[.55rem]">{{$ttl_reaction}} {{ __('series.reactions') }}</p>
    </span>
    <x-series.reaction :reaction="$reaction" :action="route('series.addReactionComic', $comic)" :objects="$comic" />
    <x-series.chat :object="$comic" :action="route('series.addCommentCommic', $comic)" />
</div>

@include('layout.footer')
@endsection
