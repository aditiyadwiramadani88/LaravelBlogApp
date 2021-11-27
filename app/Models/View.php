<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class View extends Model{

    protected $table = 'views'; 
    protected $primarykey  = 'id';
    protected $fillable = ['slug_post', 'total_views'];
}
