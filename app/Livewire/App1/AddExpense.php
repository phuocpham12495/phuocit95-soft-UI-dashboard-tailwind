<?php

namespace App\Livewire\App1;

use Livewire\Component;
use App\Models\CashFlow;
use Livewire\Attributes\Validate;

class AddExpense extends Component
{
    #[Validate('required')]
    public $category;

    #[Validate('required')]
    public $amount;

    #[Validate('required')]
    public $note;

    public function minus() {
        //validate
        $this->validate();

        CashFlow::create([
            "category" => $this->category,
            "amount" => -$this->amount,
            "note" => $this->note,
            "arise_date" => today()
        ]);

        $this->redirect("/app1");
    }

    public function render()
    {
        return view('livewire.app1.add-expense');
    }
}
