@extends('layout.master')

@section('title', __('profile.profile_page_title'))
@section('content')
@include('layout.navbar')
@include('components.profile.banner')

<div class="home-cont lg:min-h-[40vh]">

    <div class="series-cont gap-4">
        <h2 class="text-[#FFD700] text-xl font-bold uppercase">{{ __('profile.bookmarks') }}</h2>
        
        <div class="series-layout md:min-w-[40vw]">
            @if ($bookmark->isEmpty())
                <p class="text-[#FFFFFF90] text-xs w-full">No Boookmarked Comic yet</p>

            @else
                @foreach ($bookmark as $comic)
                    <x-profile.card :comic="$comic"/>
                @endforeach
            @endif
        </div>
    </div>

    <div class="series-cont gap-4">
        <h2 class="text-[#FFD700] text-xl font-bold uppercase">{{ __('profile.history') }}</h2>

        <div class="series-layout-vert md:min-w-[25vw]">
            @if ($history->isEmpty())
                <p class="text-[#FFFFFF90] text-xs w-full">No History Yet</p>
            @else
                @foreach ($history as $his)
                    <x-profile.cardVert :history='$his'/>
                @endforeach
            @endif

        </div>
    </div>
</div>

@include('layout.footer')

@endsection