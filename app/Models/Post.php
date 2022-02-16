<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
    ];

    public function exist($id)
    {           
        return DB::table('posts')->where('id', $id)->exists();
    }
}
