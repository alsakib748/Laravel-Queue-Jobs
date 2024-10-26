<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Jobs\SendEmailJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    // public function emailSend(){
    //     $email = User::select('email')->first()->email;

    //     dispatch(new SendEmailJob($email));

    //     dd("Send Mail Successfully");
    // }

    public function emailSend(){
        $data = 'Lorem ipsum dolor sit amet consectetur adipiscing elit vel cum sollicitudin montes lacus commodo, purus ad litora cursus augue iaculis taciti tincidunt morbi neque molestie sociis. Gravida morbi nullam natoque interdum ad nibh, consequat odio neque elementum aliquam. Gravida molestie orci proin suspendisse posuere, fringilla sed fermentum porttitor phasellus, velit viverra penatibus primis. Ligula ad sodales vitae enim nunc semper pretium vulputate eu, mus fermentum lacus dictum sapien conubia porta pellentesque, mollis volutpat a nullam aliquam neque nibh tellus parturient, netus montes class posuere lectus luctus pulvinar. Vivamus metus penatibus laoreet dictum tristique dignissim congue purus augue, suscipit arcu vitae libero tortor venenatis eleifend tincidunt felis, primis interdum ligula nec malesuada aliquam morbi maecenas.';

        dispatch(new SendEmailJob($data));

        return 'Email Send Successfully';

    }

}
