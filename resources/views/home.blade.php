@extends('layout.master')

@section('title', __('home.title'))

@section('content')
@include('layout.navbar')

{{-- Banner --}}
<div class="swiper mySwiper mt-6">
    <div class="swiper-wrapper">
        @for ($i = 0; $i < 20; $i++)
            <div href="" class="swiper-slide flex !w-[180px] max-h-[240px]" data-url="{{ route('series.detail')}}">
                @include('components.series.cardBanner')
            </div>
        @endfor
    </div>
</div>

{{-- Manga View --}}
<div class="home-cont">

    <div class="series-cont gap-4">
        <h2>{{ __('home.update') }}</h2>

        <div class="flex justify-between gap-1 md:gap-4 update-day">
            @foreach (config('date') as $day)
                <button class="day-btn">
                    {{ __($day['name']) }}
                </button>
            @endforeach
        </div>

        <div class="series-layout">
            @for ($i = 0; $i < 12; $i++)
                @include('components.series.card')
            @endfor
        </div>
    </div>

    <div class="series-cont gap-4">
        <h2>{{ __('home.recommended') }}</h2>

        <div class="series-layout-vert">
            @for ($i = 0; $i < 5; $i++)
                @include('components.series.cardVert')
            @endfor
        </div>
    </div>
</div>

@php
    $days = [
        __('home.sun'),
        __('home.mon'),
        __('home.tue'),
        __('home.wed'),
        __('home.thu'),
        __('home.fri'),
        __('home.sat'),
    ];
@endphp

<script>
    window.days = @json($days);
</script>

@include('layout.footer')