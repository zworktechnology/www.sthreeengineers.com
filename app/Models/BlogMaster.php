<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogMaster extends Model
{
    use HasFactory;

    protected $fillable = [
        'master_name',
        'soft_delete'
    ];

    public function blog()
    {
        return $this->hasMany(Blog::class, 'master_blog_id');
    }
}
