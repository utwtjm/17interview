<?php

namespace App\Exceptions;

use Exception;

class PostNotFound extends Exception
{
    public function render()
    {
        return response()->json([
            'code' => 'postNotFound',
            'message' => $this->getMessage()
        ], 400);
    }
}
