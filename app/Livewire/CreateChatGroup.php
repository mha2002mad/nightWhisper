<?php

namespace App\Livewire;

use App\Models\groupChats;
use Illuminate\Support\Facades\Cookie as CF;
use Livewire\Component;
class CreateChatGroup extends Component
{
    public $theUUID = "";

    public function copyUUIDToClipboard(){
        $this->dispatch("copyToClipboard", [
            "uuid" => $this->theUUID
        ]);
    }

    public function makeOne () {
        if ($this->theUUID != "") {
            return ;
        }
        if (cf::has("groupChatID")) {
            $this->theUUID = cf::get("groupChatID");
            return ;
        }
        $gc = groupChats::make();
        $this->theUUID = $gc->groupChatID;
        // $this->theUUID = "xxxxxxxx xxxxxxxx xxxxxxxx";
        $c = CF::forever("groupChatID", $this->theUUID, httpOnly:true, sameSite: 'strict');
        cf::queue($c);
    }

    public function redirectToGroupChat() {
        return redirect('/chat');
    }

    public function mount() {
        if (cf::get('groupChatID')) {
            $this->theUUID = cf::get('groupChatID');
        }
    }

    public function render()
    {
        return view('livewire.create-chat-group');
    }
}
