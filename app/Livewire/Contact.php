<?php

namespace App\Livewire;

use App\Mail\ContactUs;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\Attributes\Validate;

class Contact extends Component
{
    #[Validate('required|min:3')]
    public $name = '';

    #[Validate('required|email')]
    public $email = '';

    #[Validate('required')]
    public $message = '';

    public function submit()
    {
        $this->validate();

        $data=ContactMessage::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);
        Mail::to('abc@abc.com')->send(new ContactUs($data));
        session()->flash('status', 'Thank U for contact us.');
        return redirect()->to('/contacts');
    }
    public function render()
    {
        return view('livewire.contact');
    }
}
