<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    protected $fillable = ['email', 'address', 'facebook_url', 'instagram_url', 'linkedin_url', 'youtube_url', 'pinterest_url'];
}
