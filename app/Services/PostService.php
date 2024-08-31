<?php

namespace App\Services;

use App\Models\Post;
use App\Repositories\PostRepositoryInterface;
use App\Repositories\PostRepository;
use Illuminate\Support\Collection;

class PostService
{
    private $postRepository;

    public function __construct(PostRepository $postRepository) {
        $this->postRepository = $postRepository;
    }

    public function getAllPosts(): Collection
    {
        return $this->postRepository->getAll();
    }

    public function createPost(array $data): Post
    {
        return $this->postRepository->createPost($data);
    }

    public function getPostById(int $id)
    {
        return $this->postRepository->getPostById($id);
    }

    public function updatePost(array $data, int $id): Post
    {
        return $this->postRepository->updatePost($data, $id);
    }

    public function deletePost(int $id)
    {
        $this->postRepository->deletePost($id);
    }
}
