<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addPost()
    {
        $post = new Post();
        $post->title = "First Post Title";
        $post->body = "First Post Description";
        $post->save();
        return "Post has been created successfully!";
    }

    public function addComment($id)
    {
        $post = Post::find($id);
        $comment = new Comment();
        $comment->comment = "This is First Comment";
        $post->comments()->save($comment);
        return "Comment has been posted!";
    }

    public function getCommentsByPost($id)
    {
        $comments = Post::find($id)->comments;
        return $comments;
    }
}
