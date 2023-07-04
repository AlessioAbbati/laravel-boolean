<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'travels';
    protected $fillable = ["date", "title", "text", "image", "country", "city"];
}
