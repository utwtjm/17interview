<?php

namespace App\Exceptions;

use Exception;

class CommentAddError extends Exception
{
    public function render()
    {
        return response()->json([
            'code' => 'commentAddError',
            'message' => $this->getMessage()
        ], 400);
    }
}
