<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'thumbnail',
        'name',
        'description',
        'category',
        'github_url',
        'start_date',
        'finish_date',
    ];
}
