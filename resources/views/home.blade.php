@extends('layout.master')

@section('title', 'Deva Scans | Home')

@section('content')
@include('layout.navbar')

{{-- Banner --}}
<div class="flex gap-4 overflow-x-auto mt-6">
    @for ($i = 0; $i < 10; $i++)
        <a href="" class="flex min-w-[180px] h-[240px]">
            @include('components.cover-card')
        </a>
    @endfor
</div>

{{-- Manga View --}}
<div class="flex items-start justify-center h-auto gap-8 mt-6">

    <div class="flex flex-col gap-6">
        <div class="flex justify-between gap-4">
            @foreach (config('date') as $day)
                <button class="w-full py-1.5 bg-[#FFD700] uppercase font-semibold">
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

    <div class="flex flex-col gap-2">
        <h2 class="text-white text-xl font-bold uppercase">bookmark</h2>

        <div class="series-layout-vert">
            @for ($i = 0; $i < 5; $i++)
                @include('components.series-card-vert')
            @endfor
        </div>
    </div>
</div>