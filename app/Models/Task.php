<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    const STATUS_NEW = 0;
    const STATUS_IN_PROGRESS = 1;
    const STATUS_TEST = 2;
    const STATUS_DONE = 3;
}
