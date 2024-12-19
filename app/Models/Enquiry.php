<?php

namespace App\Models;

use App\Mail\EnquiryMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Enquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phonenumber',
        'address',
    ];

    public static function boot()
    {
        Parent::boot();

        static::created(function ($item) {

            $to_provider = 'developer@zworktechnology.com';
            $to_owner = 'sthreeengineers@gmail.com';

            Mail::to($to_owner)->bcc($to_provider)->send(new EnquiryMail ($item));
            // Mail::to($to_provider)->send(new EnquiryMail ($item));
        });
    }
}
