<?php

namespace App\Services;

use App\Models\Post;
use App\Exceptions\PostAddError;

class PostService
{
    // 新增
    public function add($title, $content) 
    {        
        try {
            $post = new Post;
            $post->title = $title;
            $post->content = $content;
            $post->save();
        } catch (\Exception $e) {
            throw new PostAddError("post add error");
        }

        return $post->id;
    }
}