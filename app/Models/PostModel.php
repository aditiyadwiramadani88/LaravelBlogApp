<?php 

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model { 

    protected $table = 'post';
    protected $primarykey  = 'id';          

    protected $fillable = ['title','content', 'time', 'slug', 'author'];

}