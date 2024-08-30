<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Exception;

class MessageController extends Controller
{

    public function index()
    {
    	return view('message');
    }

    function store(Request $request)
    {
        $twilioSid = env('TWILIO_SID');
        $twilioAuthToken = env('TWILIO_AUTH_TOKEN');
        $twilioNumber = env('TWILIO_NUMBER');

        $to = $request->phone;
        $messageBody = $request->message;

        try {

            $client = new Client($twilioSid, $twilioAuthToken);

            $client->messages->create($to, [
                'from' => $twilioNumber,
                'body' => $messageBody]);

            return "Message sent successfully!";

        } catch (Exception $e) {
            return "Error sending message: " . $e->getMessage();
        }
    }
}
