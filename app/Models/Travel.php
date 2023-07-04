<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;
<<<<<<< HEAD
    public $timestamps = false;
    protected $table = 'travels';
}
=======
    protected $fillable = ["date", "title", "text", "image", "country", "city"];
}
>>>>>>> origin/CRUD_2_nicola
