<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\SMSMessages;
use Illuminate\Http\Request;
use Exception;
use Twilio\Rest\Client;

class SMSController extends Controller
{
    public function sendSMS(Request $request)
    {
        $receiver_number = $request->number;
        $message = $request->sms;

        try{

            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");

            $client = new Client($account_sid, $auth_token);
            $client->messages->create($receiver_number,[
                'from' => $twilio_number,
                'body' => $request->sms]);


            return back()->with('message', 'Message Successfully Sent!');
            

        } catch (Exception $e) {
            return back()->with('message', 'Message Failed!');
            // return $e->getMessage();
        }
        }
    }

