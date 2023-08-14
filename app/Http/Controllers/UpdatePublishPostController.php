<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class UpdatePublishPostController extends Controller
{
    public function index(Request $request, Post $post) {
        $foundPostisPublish= Post::where('slug', $request->slug)
                    ->where('is_publish', true)->first();
        Post::where('slug', $request->slug)
            ->update(['is_publish' => true]);

        
        if($foundPostisPublish) {
            Post::where('slug', $request->slug)
            ->update(['is_publish' => false]);

            return redirect('/dashboard/posts')->with('success', 'Post un-publish successfully.');
        }
        return redirect('/dashboard/posts')->with('success', 'Post published successfully.');
    }
}
