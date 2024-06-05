<?php

namespace App\Livewire\App1;

use Livewire\Component;
use App\Models\CashFlow;

class CashFlowStatement extends Component
{
    public $cashflows = [];

    public function mount() {
        // dd($this->cashflows->last());
    }

    public function deleteCashFlow(CashFlow $cashFlow) {
        // dd($cashFlow);
        $cashFlow->delete();
        $this->redirect("/app1");
    }

    public function render()
    {
        return view('livewire.app1.cash-flow-statement', ["cashflows" => $this->cashflows]);
    }
}
