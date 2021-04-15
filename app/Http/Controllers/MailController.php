<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Mailar;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function send() { $objDemo = new \stdClass(); 
        $objDemo->demo_one = 'Demo One Value'; 
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'Ekibastuz City';
        $objDemo->receiver = 'Daniyal Bratan';
        Mail::to("190103437@stu.sdu.edu.kz")->send(new Mailar($objDemo));
    }
}
