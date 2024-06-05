<?php

namespace App\Livewire;

use Livewire\Component;

class MoneyManager extends Component
{

    public $currentTabId = 0;

    protected $listeners = ['reRenderParent'];

    public function mount() {

    }

    public function reRenderParent()
    {

    }


    public function render()
    {
        return view('livewire.money-manager');
    }
}
