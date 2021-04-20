<?php

namespace App\Http\Livewire\Expense;

use Livewire\Component;
use App\Models\Expense;
use Livewire\WithFileUploads;

class ExpenseCreate extends Component
{
    use WithFileUploads; 
    // e uma trait raits are a great way 
    //to re-use functionality between multiple Livewire components.

    public $amount;
    public $description;
    public $type;
    public $photo;

    protected $rules = [
        'amount' => 'required',
        'type' => 'required',
        'description' => 'required',
        'photo' => 'image'
    ];

    public function createExpense()
    {
        $this->validate();

        if($this->photo)
        {
            $this->photo = $this->photo->store('expenses-photos', 'public'); //expenses-photos sera o nome da pasta
        }

        auth()->user()->expenses()->create([
            'amount' => $this->amount,
            'type' => $this->type,
            'description' => $this->description,
            'user_id' => 1,
            'photo' => $this->photo
        ]);

        session()->flash('message', 'Registro criado com sucesso!');
        
        //alunar os valores, limpar campo em cascata
        $this->amount = $this->type = $this->description = null;
    }

    public function render()
    {
        return view('livewire.expense.expense-create');
    }
}
