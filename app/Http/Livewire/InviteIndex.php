<?php

namespace App\Http\Livewire;

use App\Models\Invite;
use Livewire\Component;

class InviteIndex extends Component
{
    protected $listeners = ['inviteAdded'];

    public function inviteAdded()
    {
        session()->flash('invited', 'Successfully added invited guest');
    }

    public function deleteInvite($id)
    {
        if($id) {
            $data = Invite::find($id);
            $data->delete();

            session()->flash('deleted', 'Successfully deleted invited guest');
        }
    }

    public function render()
    {
        $data = Invite::selectRaw("id, response, presence, time, name, quota, uniqid")
            ->orderBy('time', 'desc')
            ->get();
            
        return view('livewire.invite-index', [
            'invites' => $data,
            'total_invite' => count($data)
        ]);
    }
}
