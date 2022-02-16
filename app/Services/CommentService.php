<?php

namespace App\Services;

use App\Models\Post;
use App\Models\Comment;
use App\Exceptions\PostNotFound;
use App\Exceptions\CommentAddError;

class CommentService
{
    // 新增
    public function add($postId, $messages) 
    {        
        try {
            // 文章不存在
            $exist = Post::exist($postId);
            if (!$exist) {
                throw new PostNotFound("post not found");
            }

            // 新增留言
            $comment = new Comment;
            $comment->post_id = $postId;
            $comment->messages = $messages;
            $comment->save();
        } catch (\Exception $e) {
            if ($e instanceof PostNotFound) {
                throw $e;
            }

            throw new CommentAddError("comment add error");
        }

        return $comment->id;
    }
}