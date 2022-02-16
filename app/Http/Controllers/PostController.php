<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PostService;

class PostController extends Controller
{
    private $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function add(Request $request)
    {
        // 驗證
        $request->validate([
            'title' => 'required|max:100',
            'content' => 'required',
        ]);

        // params
        $content = $request->input('content');
        $title = $request->input('title');

        // 新增
        $postId = $this->postService->add($title, $content);

        return response()->json([
            "id" => $postId,
        ]);
    }
}
