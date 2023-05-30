<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users_detail extends Model
{
    use HasFactory;

    protected $table = 'users_detail';

    protected $fillable = [
        'user_id',
        'short_description',
        'about',
        'location',
        'website_url',
        'website_domain',
        'instagram_url',
        'instagram_id',
        'email_url',
        'email_address',
    ];
    
}
