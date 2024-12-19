<?php

namespace App\Models;

use App\Mail\ContactMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'subject',
        'message',
        'reach_out_status'
    ];

    public static function boot()
    {
        Parent::boot();

        static::created(function ($item) {

            $to_provider = 'developer@zworktechnology.com';
            $to_owner = 'sthreeengineers@gmail.com';

            Mail::to($to_owner)->bcc($to_provider)->send(new ContactMail ($item));
            // Mail::to($to_provider)->send(new ContactMail ($item));
        });
    }
}
