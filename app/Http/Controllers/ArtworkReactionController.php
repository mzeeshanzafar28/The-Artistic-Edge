<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtistImage;
use App\Models\ArtworkReaction;
use Illuminate\Support\Facades\Auth;

class ArtworkReactionController extends \Illuminate\Routing\Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request, $artworkId)
    {
        $request->validate([
            'reaction' => 'required|in:1,-1',
        ]);

        $artwork = ArtistImage::findOrFail($artworkId);

        $reaction = ArtworkReaction::updateOrCreate(
            ['user_id' => Auth::id(), 'artwork_id' => $artwork->id],
            ['reaction' => $request->reaction]
        );

        $likes = $artwork->reactions()->where('reaction', 1)->count();
        $dislikes = $artwork->reactions()->where('reaction', -1)->count();

        return response()->json(['success' => true, 'likes' => $likes, 'dislikes' => $dislikes]);
    }
}
