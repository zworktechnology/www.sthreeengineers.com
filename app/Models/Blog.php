<?php

namespace App\Models;

use App\Mail\BlogAuthorMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'random_id',
        'blog_date',
        'master_blog_id',
        'title',
        'slug_url',
        'short_content',
        'blog_content',
        'quotes',
        'blog_image',
        'image_alt',
        'writer_name',
        'writer_mail_address',
        'writer_web_address_address',
        'active_status',
        'soft_delete',
        'meta_keywords',
        'pined'
    ];

    // public static function boot()
    // {
    //     Parent::boot();

    //     static::created(function ($item) {

    //         $to_submited_author = $item->writer_mail_address;

    //         Mail::to($to_submited_author)->send(new BlogAuthorMail ($item));
    //     });
    // }

    public function blogmaster()
    {
        return $this->belongsTo(BlogMaster::class, 'master_blog_id');
    }

    public function comment()
    {
        return $this->hasMany(Comment::class, 'blog_id');
    }
}
