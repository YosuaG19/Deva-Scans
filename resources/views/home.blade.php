@extends('layout.master')

@section('title', 'Deva Scans | Home')

@section('content')
@include('layout.navbar')

{{-- Banner --}}
<div class="swiper mySwiper mt-6">
    <div class="swiper-wrapper">
        @for ($i = 0; $i < 20; $i++)
            <div href="" class="swiper-slide flex !w-[180px]" data-url="manga/{{$i}}">
                @include('components.cover-card')
            </div>
        @endfor
    </div>
</div>

{{-- Manga View --}}
<div class="home-cont">

    <div class="series-cont">
        <h2>Update</h2>

        <div class="flex justify-between gap-4">
            @foreach (config('date') as $day)
                <button class="w-full py-1.5 bg-[#FFD700] text-xs md:text-sm uppercase font-semibold">
                    {{$day['name']}}
                </button>
            @endforeach
        </div>

        <div class="series-layout">
            @for ($i = 0; $i < 10; $i++)
                @include('components.series-card')
            @endfor
        </div>
    </div>

    <div class="series-cont">
        <h2>Recommended</h2>

        <div class="series-layout-vert">
            @for ($i = 0; $i < 5; $i++)
                @include('components.series-card-vert')
            @endfor
        </div>
    </div>
</div>

@include('components.footer')