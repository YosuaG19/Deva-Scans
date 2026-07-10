@extends('layout.master')

@section('title', __('series.details_title'))

@section('content')
@include('layout.navbar')

<div class="home-cont">

    {{-- LEFT SIDE --}}
    @include('components.series.detailSidebar', [
    'coverimage' => 'images/mom.jpg',
    'rating' => '4.8',
    'bookmark' => 'x.x',
    'chapters' => 43,
    'type' => 'Manhwa',
    'status' => 'Ongoing',
    'author' => 'Unknown',
    'artist' => 'Unknown',
    'genres' => [
        'Action',
        'Fantasy',
        'Adventure',
        'Drama'
    ]
])

    {{-- RIGHT SIDE COMPONENT --}}
    @include('components.series.detailContent', [
        'title' => 'On the Way to Meet Mom',
        'description' => "One day, after being discovered in an abandoned house by a rescue team, Mori suddenly 
                        finds himself in a children's protection center. Here, he begins to learn a new way of life – one that 
                        includes grand care packages sent by a mysterious patron. But when his closest friend is reunited with her 
                        mother and leaves the center, Mori learns for the first time the existence of a mother for every child, 
                        and decides to embark on a journey to find his own. But what sort of obstacles wait along the way?",
        'chapters' => 43
    ])

</div>

<div class="flex flex-col items-center mx-auto bg-[#151515] rounded-lg h-fit md:w-[80%] w-[95%] p-6 mt-6 gap-4">
    <span class="flex flex-col item-center text-center text-white">
        <h2 class="text-sm font-semibold">{{ __('series.reaction_series_title') }}</h2>
        <p class="text-[.55rem]">xxx {{ __('series.reactions') }}</p>
    </span>
    <x-series.reaction/>
    @include('components.series.chat')
</div>

@include('layout.footer')
@endsection
