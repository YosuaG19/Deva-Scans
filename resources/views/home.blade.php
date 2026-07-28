@extends('layout.master')

@section('title', __('home.title'))

@section('content')
@include('layout.navbar')

@if(session('success'))
    <div
        id="success-popup"
        class="fixed top-5 right-5 z-50 bg-green-600 text-white px-6 py-3 rounded-lg shadow-lg"
    >
        {{ session('success') }}
    </div>

    <script>
        setTimeout(() => {
            document.getElementById('success-popup')?.remove();
        }, 3000);
    </script>
@endif

{{-- Banner --}}
<div class="swiper mySwiper mt-6">
    <div class="swiper-wrapper">
        @foreach ($comics_banner as $comic)
            <div href="" class="swiper-slide flex !w-[180px] max-h-[240px] overflow-hidden rounded-lg" data-url="{{ route('series.detail', $comic)}}">
                <x-series.cardBanner :comic='$comic'/>
            </div>
        @endforeach
    </div>
</div>

{{-- Manga View --}}
<div class="home-cont">

    <div class="series-cont gap-4">
        <h2>{{ __('home.update') }}</h2>

        <div class="sentence flex justify-between gap-1 md:gap-3 lg:gap-4 update-day">
            @foreach (config('date') as $day)
                <button class="day-btn" data-day="{{ $day['value'] }}">
                    {{ __($day['name']) }}
                </button>
            @endforeach
        </div>


        @foreach (config('date') as $day)
            @php
                $lim = 12;
                $i = 0;
            @endphp
            <div class="update-content {{ $loop->first ? '' : 'hidden' }}" data-day="{{ $day['value'] }}">
                <div class="series-layout">
                    @foreach ($updates[$day['value']] ?? [] as $comic)
                        @if ($lim == $i)
                            @break;
                        @endif
                        <x-series.card :comic="$comic"/>

                        @php
                            $i += 1;
                        @endphp
                    @endforeach
                </div>
            </div>
        @endforeach

        {{-- <div class="series-layout">
            @foreach ($comics_upt as $comic)
                <x-series.card :comic='$comic'/>
            @endforeach
        </div> --}}
    </div>

    <div class="series-cont gap-4">
        <h2>{{ __('home.recommended') }}</h2>

        <div class="series-layout-vert">
            @foreach ($comics_rec as $comic)
                <x-series.cardVert :comic='$comic'/>
            @endforeach
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

{{-- <div class="text-white">
    {{$updates}}
</div> --}}

<script>
    window.days = @json($days);
</script>

@include('layout.footer')