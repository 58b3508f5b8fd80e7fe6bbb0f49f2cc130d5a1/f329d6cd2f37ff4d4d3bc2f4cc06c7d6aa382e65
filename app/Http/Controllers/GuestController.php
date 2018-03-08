<?php

namespace App\Http\Controllers;

use App\Email_subscription;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    //
    public function subscribe(Request $request)
    {
        $message='Sorry, your subscription was not successful';
        $subscription = new Email_subscription;
        $subscription->email = $request->email;
        if ($subscription->save()) {
            $message
                = "Congratulations!! Your subscription was successful. You'll be notified once we're done.";
        }

        return response()->json([
            'status'  => 'success',
            'message' => $message,
        ]);
    }
}
