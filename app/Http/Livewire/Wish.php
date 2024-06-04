<?php

namespace App\Http\Livewire;

use App\Models\Invite;
use App\Models\Wish as ModelWish;
use Livewire\Component;

class Wish extends Component
{
    public $uniqueId;
    public $name;
    public $message;
    public $response;

    public function sendWish()
    {
        $this->validate([
            'uniqueId' => 'required',
            'name' => 'required',
            'message' => 'required'
        ]);

        ModelWish::create([
            'uniqueId' => $this->uniqueId,
            'name' => $this->name,
            'message' => $this->message
        ]);

        $this->message = '';

        session()->flash('thanks', 'Message sent successfully');
    }

    public function updateResponse($response) {
        $invite = Invite::where('uniqid', $this->uniqueId)->first();
        $invite->update([
            'response' => $response
        ]);

        session()->flash('thanks', 'Attendance sent successfully');
    }

    public function render()
    {
        return view('livewire.wish');
    }
}
