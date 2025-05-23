<?php

namespace App\Livewire;

use App\Models\groupChats;
use Livewire\Component;
use Illuminate\Support\Facades\Cookie as cf;

class JoinChat extends Component
{
    public string $UUID = "";
    public string $UUID_msg = "";
    public bool $disabled = false;

    protected function rules() {
        return [
            'UUID' => 'required|uuid'
        ];
    }

    public function joinChat() {
        $this->disabled = 1;
        $this->validate();
        if (!groupChats::find($this->UUID)->exists()) {
            $this->UUID_msg = 'group chat doesn\'t exist';
            return 0;
        }
        $cookie = cf::make('groupChatID', $this->UUID, 20);
        cf::queue($cookie);
        $this->disabled = 0;
        return redirect('/chat');
    }
    
    public function mount() {
        if(cf::get('groupChatID')){
            return redirect('/chat');
        }
    }
    public function render()
    {
        return view('livewire.join-chat');
    }
}
