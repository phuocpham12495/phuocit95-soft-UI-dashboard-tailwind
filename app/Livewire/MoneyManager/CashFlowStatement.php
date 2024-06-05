<?php

namespace App\Livewire\MoneyManager;

use Livewire\Component;
use App\Models\CashFlow;

class CashFlowStatement extends Component
{
    public $cashflows;

    public function mount() {
        $this->cashflows = CashFlow::all();
    }

    public function deleteCashFlow(CashFlow $cashFlow) {
        // dd($cashFlow);
        $cashFlow->delete();
        $this->redirect("/app1");

        // $this->dispatch('$refresh');

        // $this->mount();
        // $this->render();
    }

    public function render()
    {
        return view('livewire.money-manager.cash-flow-statement');
    }
}
