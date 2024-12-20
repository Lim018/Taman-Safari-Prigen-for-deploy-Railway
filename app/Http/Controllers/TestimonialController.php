<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{

    public function index()
    {
        $testimonials = Post::with('user')
                            ->where('DELETE_MARK', '0')
                            ->orderBy('CREATE_DATE', 'desc')
                            ->take(10)  // Limit to 10 most recent testimonials
                            ->get();
        
        return view('pages.post', compact('testimonials'));
    }
    public function create()
    {
        return view('pages.post');
    }

    public function store(Request $request)
    {
        $request->validate([
            'MESSAGE_TEXT' => 'required|min:10|max:500',
        ]);

        $post = new Post();
        $post->SENDER = Auth::id();
        $post->MESSAGE_TEXT = $request->MESSAGE_TEXT;
        $post->CREATE_BY = Auth::user()->name;
        $post->CREATE_DATE = now();
        $post->save();

        return redirect()->route('testimonials.create')->with('success', 'Terima kasih atas testimoni Anda!');
    }
}

