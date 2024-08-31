<?php
// app/Repositories/PostRepositoryInterface.php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\PostService;
use \Illuminate\Database\Eloquent\ModelNotFoundException;

class PostController extends Controller
{
    private $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return $this->postService->getAllPosts();
    }

    public function findPostById($id)
    {
        try {
            $post = $this->postService->getPostById($id);

            return response()->json([
                'message' => 'Post found',
                'post' => $post,
                'code' => 200
            ], 200);
        }
        catch (\Exception)
        {
            return response()->json([
                'message' => "Post not found!",
                'code' => 404
            ], 404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        DB::beginTransaction();

        try {

            $post = $this->postService->createPost($request->all());

            DB::commit();

            return response()->json([
                'message' => 'Post created successfully',
                'post' => $post
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Post creation failed',
                'error' => $e->getMessage()
            ], 400);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        //
        $post->update($request->all());

        return response()->json([
            'message' => 'Post updated successfully',
            'post' => $post
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        DB::beginTransaction();

        try {

            $this->postService->deletePost($id);

            DB::commit();

            return response()->json([
                'message' => 'Post deleted successfully'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Post deletion failed',
                'error' => $e->getMessage()
            ], 400);
        }
    }
}
