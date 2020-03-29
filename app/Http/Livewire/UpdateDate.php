<?php

namespace App\Http\Livewire;

use App\Date;
use Livewire\Component;

class UpdateDate extends Component
{
    public $user;

    public function render($id)
    {
        return view('livewire.update-date', [
            'date' => Date::findOrFail($id)
        ]);
    }
}
