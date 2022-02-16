<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CommentService;

class CommentController extends Controller
{
    private $commentService;

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }

    public function add(Request $request)
    {
        // 驗證
        $request->validate([
            'postId' => 'required|integer',
            'messages' => 'required|max:100',
        ]);

        // params
        $postId = $request->input('postId');
        $messages = $request->input('messages');

        // 新增
        $commentId = $this->commentService->add($postId, $messages);
 
        return response()->json([
            "id" => $commentId,
        ]);
    }
}
