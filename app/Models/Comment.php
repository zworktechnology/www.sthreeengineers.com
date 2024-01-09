<?php

namespace App\Models;

use App\Mail\CommentMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_id',
        'name',
        'email',
        'phone_number',
        'message',
        'active_status',
        'soft_delete'
    ];

    public static function boot()
    {
        Parent::boot();

        static::created(function ($item) {

            $to_submited_author = $item->email;

            Mail::to($to_submited_author)->send(new CommentMail ($item));
        });
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id');
    }
}
