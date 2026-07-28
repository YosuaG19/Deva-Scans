<?php

namespace App\Http\Controllers;

use App\Models\Comics;
use App\Models\Genres;
use App\Models\Types;
use App\Models\Status;
use App\Models\Sorts;
use Illuminate\Http\Request;

class BrowseController extends Controller
{
    public function view(Request $request){
        if (!$request->has('sort')) {
            return redirect()->route('browse.view', [
                'sort' => 1,
                'type' => 1,
                'status' => 1,
                'direction' => 'desc',
            ]);
        }

        $genres = Genres::get();
        $types = Types::get();
        $status = Status::get();
        $sorts = Sorts::get();
        $direction = $request->input('direction', 'desc');


        $query = Comics::query();
        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('genre')) {
            $selectedGenres = $request->genre;

            $query
                ->withCount([
                    'genres as matched_genres_count' => function ($q) use ($selectedGenres) {
                        $q->whereIn('genres.id', $selectedGenres);
                    }
                ])
                ->whereHas('genres', function ($q) use ($selectedGenres) {
                    $q->whereIn('genres.id', $selectedGenres);
            });

            $query->orderByDesc('matched_genres_count');

        }

        if ($request->filled('type') && $request->type !== '1') {
            $query->where('type_id', $request->type);
        }

        if ($request->filled('status') && $request->status !== '1') {
            $query->where('status_id', $request->status);
        }

        if ($request->filled('chapter')) {
            $query->where('chapter_count', '>=', $request->chapter);
        }

        // dd($request->sort);
        switch ($request->sort) {
            case 1:
                $query->latest();
                break;

            case 2:
                $query->orderBy('bookmarks_count', $direction);
                break;

            case 3:
                $query->orderBy('rating_avg', $direction);
                break;

            case 4:
                $query->orderBy('title', $direction);
                break;
                
            case 5:
                $query->orderBy('last_chapter_at', $direction);
                break;
            
            default:
                $query->latest();
        }
        
        $comics = $query
        ->paginate(12)
        ->withQueryString();
        // $comics = Comics::orderBy('Created_at')->paginate(12);
        
        return view('browse', compact(['genres', 'types', 'status', 'sorts', 'comics']));
    }
}
