<?php

namespace App\Livewire\Website;

use App\Models\Subscriber;
use Livewire\Component;
use Livewire\Attributes\Validate;

class Subscribe extends Component
{
    public string $gRecaptchaResponse;

    public $showSuccessMessage;

    #[Validate('required|email:dns,rfc|max:255')]
    public $email;

    public function render()
    {
        return view('livewire.website.subscribe');
    }

    public function save()
    {
        $this->validate();

        Subscriber::create([
            'email' => $this->email,
        ]);

        $this->reset();

        $this->showSuccessMessage = true;
    }
}
