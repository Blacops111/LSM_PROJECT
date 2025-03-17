<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\GeneralNotification;
use App\Models\User;

class NotificationController extends Controller
{
    public function send(Request $request)
    {
        $request->validate(['message' => 'required|string']);

        Notification::send(User::all(), new GeneralNotification($request->message));

        return back()->with('success', 'Notification sent.');
    }
}
