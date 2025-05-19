<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;


class DynamicComponentRendererForLogin extends Component
{
    public string $activeComponent = \App\Livewire\TwoButtons::class;

    protected $listeners = [
        "triggerShowCreateChat" => "showCreateChat",
        "triggerShowJoinChat" => "showJoinChat",
    ];
    public function showCreateChat(): void {
        if ($this->activeComponent === \App\Livewire\TwoButtons::class) {
            $this->activeComponent = \App\Livewire\CreateChatGroup::class;
        }
    }
    
    public function showJoinChat(): void {
        if ($this->activeComponent === \App\Livewire\TwoButtons::class) {
        $this->activeComponent = \App\Livewire\JoinChat::class;
        }
    }
    public function render()
    {
        return view('livewire.dynamic-component-renderer-for-login');
    }
}
