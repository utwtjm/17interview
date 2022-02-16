<?php

namespace App\Exceptions;

use Exception;

class PostAddError extends Exception
{
    public function render()
    {
        return response()->json([
            'code' => 'postAddError',
            'message' => $this->getMessage()
        ], 400);
    }
}
