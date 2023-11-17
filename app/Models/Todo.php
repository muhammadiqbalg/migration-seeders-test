<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\QueryException;

class Todo extends Model
{
    use HasFactory;

    protected $table = 'todos';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'completed',
    ];
}
