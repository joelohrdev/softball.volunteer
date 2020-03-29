<?php

namespace App\Http\Livewire;

use App\Date;
use App\Event;
use Livewire\Component;

class AllEvents extends Component
{
    public function render()
    {
        return view('livewire.all-events', [
            'events' => Event::with('dates')->get()->sortByDesc('dates.datetime'),
        ]);
    }
}
