<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
    protected $table = 'post_comment';
    protected $primarykey  = 'id';          

    protected $fillable = ['email', 'name', 'post_slug', 'comment'];
}
