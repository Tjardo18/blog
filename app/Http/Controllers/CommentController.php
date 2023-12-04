<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Chirp;
use App\Models\Comment;

class CommentController extends Controller
{
    // CommentController.php
    public function store(Request $request)
    {
        $request->validate([
            'chirp_id' => 'required|exists:chirps,id',
            'content' => 'required|string|max:255',
        ]);

        Comment::create([
            'chirp_id' => $request->chirp_id,
            'user_id' => auth()->user()->id,
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Comment posted successfully!');
    }
}
