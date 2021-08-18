<?php

namespace App\Http\Livewire;

use App\Mail\Contact as MailContact;
use App\Models\ContactForm;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required',

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

    }

    public function submitContact(){
        $this->validate();
        ContactForm::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
        ]);

        $data = [ 'name' => $this->name,
        'email' => $this->email,
        'phone' => $this->phone,
        'message' => $this->message ];

        foreach (['raphyabak@gmail.com', $this->email] as $recipient) {
            Mail::to($recipient)->send(new MailContact($data));
        }

        session()->flash('success', 'Your Message has been sent successfully 😃');
        $this->reset('name', 'email', 'phone', 'message');


    }

    public function render()
    {
        return view('livewire.contact');
    }
}
