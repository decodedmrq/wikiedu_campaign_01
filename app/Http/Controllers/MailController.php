<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    //
    public function sendEmail() {
    	$data = [];
    	Mail::send("email.view", $data, function($msg) {
    		$msg->from("minhnv2306@gmail.com");
    		$msg->to("20132606@student.hust.edu.vn")->subject("Test Mail");
    	});
    }
}
