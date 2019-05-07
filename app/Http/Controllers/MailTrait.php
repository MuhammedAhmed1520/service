<?php
namespace App\Http\Controllers;

trait MailTrait{

     function validRequest(array $request_data)
    {
        return validator($request_data, [
            'to.*' => 'required|email',
            'content' => 'required',
        ]);
    }
     function validSMSRequest(array $request_data)
    {
        return validator($request_data, [
            'url' => 'required',

        ]);
    }
    function return_msg(bool $status = false, string $msg = null, array $data = []): ?array
    {
        return ['status' => $status, 'msg' => $msg, 'data' => $data];
    }
    function send_sms(array $data = [])
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->post($data['url']);
    }
}