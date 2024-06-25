<?php

namespace App\Livewire\MoneyManager;

use Livewire\Component;
use App\Models\CashFlow;
use Livewire\Attributes\Validate;

class AddIncome extends Component
{
    #[Validate('required')]
    public $category;

    #[Validate('required')]
    public $amount;

    #[Validate('required')]
    public $note;

    public function mount() {
        // $this->category = '';
        // $this->amount = '';
        // $this->note = '';
    }

    public function add() {
        //validation
        $this->validate();
        // $this->validate([
        //     'category' => 'required',
        //     'amount' => 'required',
        //     'note' => 'required'
        // ]);

        $cashflow = CashFlow::create([
            'category' => $this->category,
            'amount' => $this->amount,
            'note' => $this->note,
            'arise_date' => today()
        ]);

        $this->redirect('/app1');
        // $this->dispatch('reRenderParent');
        // $this->mount();
    }

    public function render()
    {
        return view('livewire.money-manager.add-income');
    }
}
