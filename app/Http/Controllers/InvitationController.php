<?php

namespace App\Http\Controllers;

use App\Models\Invite;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function index(Invite $invite)
    {
        return view('invitation', [
            'title' => 'Erika & Mugia Wedding Invitation | ' . $invite->name,
            'name' => $invite->name,
            'uniqid' => $invite->uniqid,
            'response' => $invite->response,
            'presence' => $invite->presence,
            'time' => $invite->time,
            'message' => $invite->getMessage()
        ]);
    }

    public function sendTemplate(Invite $invite) {
        return view('send-template', [
            'title' => 'Erika & Mugia Wedding Invitation | ' . $invite->name,
            'name' => $invite->name,
            'uniqid' => $invite->uniqid,
            'response' => $invite->response,
            'presence' => $invite->presence,
            'time' => $invite->time,
            'message' => $invite->getMessage()
        ]);
    }
}
