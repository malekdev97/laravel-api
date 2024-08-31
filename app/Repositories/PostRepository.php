<?php

namespace App\Repositories;
// app/Services/PostServiceInterface.php
use App\Models\Post;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;

class PostRepository
{
    public function getAll(): Collection
    {
        return Post::all();
    }

    public function createPost(array $data): Post
    {
        return Post::create($data);
    }

    public function getPostById(int $id)
    {
        return Post::findOrFail($id);
    }

    public function updatePost(array $data, int $id)
    {
        // throw exception if no post is found
        $post = Post::findOrFail($id);

        if (!$post) {
            throw new ModelNotFoundException("Post not found");
        }
        $post->update($data);
        return $post;
    }

    public function deletePost(int $id)
    {
        Post::destroy($id);
    }
}
