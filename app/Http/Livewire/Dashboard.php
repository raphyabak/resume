<?php

namespace App\Http\Livewire;

use App\Models\ContactForm;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $contacts = ContactForm::all();
        return view('livewire.dashboard', compact('contacts'));
    }
}
