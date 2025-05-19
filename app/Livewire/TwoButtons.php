<?php

namespace App\Livewire;

use Livewire\Component;

class TwoButtons extends Component
{
    public function dispatchTriggerShowCreateChat(): void {
        $this->dispatch("triggerShowCreateChat");
    }
    
    public function dispatchTriggerShowJoinChat(): void {
        $this->dispatch("triggerShowJoinChat");
    }

    public function render()
    {
        return view('livewire.two-buttons');
    }
}
