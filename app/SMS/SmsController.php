<?php

namespace App\SMS;

use App\Http\Controllers\Controller;

class SmsController extends Controller
{

    public static  function sendSms($message,$phone_number,$name){
        $api_key = "c3NyYTpzc3JhQDIwMTc=";

        $api_url = "http://sms.rasxp.com/sms/send";

        $post_send['sender'] = 'SSRA';

        $post_send['message'] = $message;

        $post_send['recipients'] = $phone_number;

        $post_send['member_name'] = $name;

        $headers = array('Authorization: Basic ' . $api_key);

        $client = new \GuzzleHttp\Client();
        $r = $client->request('POST', $api_url, array(
                'headers' => array('Authorization' => 'Basic ' . $api_key),
                'form_params' => $post_send)
        );

        $content =  $r->getBody()->getContents();

        return $content;
    }

}