<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Jobs\SendSmsJob;
use Illuminate\Http\Request;
use Sadaimudinaadhar\Tinyurl\Facades\TinyUrl;


class EmailController extends Controller
{
    //
    use MailTrait;
    public function sendEmail(Request $request)
    {
        $validation = $this->validRequest($request->all());
        if ($validation->fails()) {
            return $this->return_msg(false, 'validation errors', [
                'validation_errors' => $validation->getMessageBag()->getMessages()
            ]);
        }
        dispatch(new SendEmailJob($request->all()));
        return $this->return_msg(true,'Email Sent');
    }
    public function sendSMS(Request $request)
    {

        $validation = $this->validSMSRequest($request->all());
        if ($validation->fails()) {
            return $this->return_msg(false, 'validation errors', [
                'validation_errors' => $validation->getMessageBag()->getMessages()
            ]);
        }
        dispatch(new SendSmsJob($request->all()));
        return $this->return_msg(true,'SMS Sent');
    }
    public function shortUrl(Request $request)
    {
        $validation = $this->validSMSRequest($request->all());
        if ($validation->fails()){
            return $this->return_msg(false, 'validation errors', [
                'validation_errors' => $validation->getMessageBag()->getMessages()
            ]);
        }
        $url = TinyUrl::create($request->get('url'));
        return $this->return_msg(true,"Success",compact('url'));


    }

}

