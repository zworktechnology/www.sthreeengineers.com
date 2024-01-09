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
        'email',
        'phone_number',
        'services',
        'message',
        'reach_out_status'
    ];

    public static function boot()
    {
        Parent::boot();

        static::created(function ($item) {

            $to_submited_author = $item->email;

            Mail::to($to_submited_author)->send(new EnquiryMail ($item));
        });
    }
}
