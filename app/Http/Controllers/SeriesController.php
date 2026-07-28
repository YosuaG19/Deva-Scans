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

        $reaction = $comic->reactions()
            ->select('type')
            ->selectRaw('COUNT(*) as total')
            ->groupBy('type')
            ->get();

        $history = null;
        if ($user){
            $history = ReadingHistory::where('user_id', $user->id)->where('comic_id', $comic->id)->first();

            // dd($history);
        }
        
        $ttl_reaction = 0;
        foreach($reaction as $react){
            $ttl_reaction += $react->total;
        }

        return view('series.series', compact('comic', 'fc', 'lc', 'reaction', 'ttl_reaction', 'history'));
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
        
        $reaction = $chapter->reactions()
            ->select('type')
            ->selectRaw('COUNT(*) as total')
            ->groupBy('type')
            ->get();
        $ttl_reaction = 0;
        foreach($reaction as $react){
            $ttl_reaction += $react->total;
        }

        return view('series.chapter', compact('comic', 'chapter', 'fc', 'lc', 'reaction', 'ttl_reaction'));
    }
}
