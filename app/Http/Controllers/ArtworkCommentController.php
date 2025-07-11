<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtistImage;
use App\Models\ArtworkComment;
use Illuminate\Support\Facades\Auth;

class ArtworkCommentController extends \Illuminate\Routing\Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('store');
    }

    public function store(Request $request, $artworkId)
    {
        $request->validate([
            'comment' => 'required|string|max:1000',
        ]);

        $artwork = ArtistImage::findOrFail($artworkId);

        $comment = ArtworkComment::create([
            'user_id' => Auth::id(),
            'artwork_id' => $artwork->id,
            'comment' => $request->comment,
        ]);

        return response()->json([
            'success' => true,
            'comment' => [
                'user' => ['name' => Auth::user()->name],
                'comment' => $comment->comment,
            ],
        ]);
    }

    public function index($artworkId)
    {
        $artwork = ArtistImage::findOrFail($artworkId);
        $comments = $artwork->comments()->with('user')->latest()->get();
        return response()->json($comments);
    }
}
