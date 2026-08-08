<?php

namespace App\Http\Controllers;

use App\Models\Comics;
use App\Models\ReadingHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SeriesController extends Controller
{
    public function detail(Comics $comic){
        $user = Auth::user();
        $fc = $comic->chapters->sortBy('numbering')->first();
        $lc = $comic->chapters->sortByDesc('numbering')->first();

        $reaction = [
            ['type' => 'upvote', 'total' => 0],
            ['type' => 'downvote', 'total' => 0],
            ['type' => 'love', 'total' => 0],
            ['type' => 'fire', 'total' => 0],
            ['type' => 'angry', 'total' => 0],
            ['type' => 'sad', 'total' => 0]
        ];

        $all_reaction = $comic->reactions()
            ->select('type')
            ->selectRaw('COUNT(*) as total')
            ->groupBy('type')
            ->get();

        // dd($all_reaction);

        $history = null;
        if ($user){
            $history = ReadingHistory::where('user_id', $user->id)->where('comic_id', $comic->id)->first();
        }
        
        $ttl_reaction = 0;
        foreach($all_reaction as $react){
            $ttl_reaction += $react->total;
        }

        return view('series.series', compact('comic', 'fc', 'lc', 'reaction', 'ttl_reaction', 'history', 'all_reaction'));
    }

    public function chapter(Comics $comic, int $chapter)
    {
        $fc = $comic->chapters->sortBy('numbering')->first();
        $lc = $comic->chapters->sortByDesc('numbering')->first();
        $chapter = $comic->chapters()
        ->where('numbering', $chapter)
        ->firstOrFail();
        
        $user = Auth::user();
        if ($user){
            ReadingHistory::updateOrCreate(
                [
                    'user_id' => $user->id,
                    'comic_id' => $comic->id,
                ],
                [
                    'chapter_id' => $chapter->id,
                ]
            );
        }
        
        $reaction = [
            ['type' => 'upvote', 'total' => 0],
            ['type' => 'downvote', 'total' => 0],
            ['type' => 'love', 'total' => 0],
            ['type' => 'fire', 'total' => 0],
            ['type' => 'angry', 'total' => 0],
            ['type' => 'sad', 'total' => 0]
        ];

        $all_reaction = $comic->reactions()
            ->select('type')
            ->selectRaw('COUNT(*) as total')
            ->groupBy('type')
            ->get();

        $ttl_reaction = 0;
        foreach($all_reaction as $react){
            $ttl_reaction += $react->total;
        }

        return view('series.chapter', compact('comic', 'chapter', 'fc', 'lc', 'reaction', 'ttl_reaction', 'all_reaction'));
    }
}
