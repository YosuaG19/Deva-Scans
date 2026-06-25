@extends('layout.master')

@section('title', "Profile | Deva Scan")
@section('content')
@include('layout.navbar')
@include('components.profile.banner')

<div class="home-cont">

    <div class="series-cont gap-4">
        <div class="flex gap-4">
            <button class="text-[#FFD700] uppercase font-semibold">Bookmarks</button>
            {{-- <button class="text-[#FFD700] uppercase font-semibold">Your Comics</button> --}}
        </div>
        <div class="series-layout">
            @for ($i = 0; $i < 10; $i++)
                @include('components.series.card')
            @endfor
        </div>
    </div>

    <div class="series-cont gap-2">
        <h2 class="text-[#FFD700] text-xl font-bold uppercase">History</h2>

        <div class="series-layout-vert">
            @for ($i = 0; $i < 5; $i++)
                @include('components.series.cardVert')
            @endfor
        </div>
    </div>
</div>

@include('layout.footer')