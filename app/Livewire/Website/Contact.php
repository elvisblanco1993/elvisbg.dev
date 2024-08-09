<?php

namespace App\Livewire\Website;

use App\Models\Lead;
use App\Models\User;
use App\Notifications\InquiryReceived;
use DutchCodingCompany\LivewireRecaptcha\ValidatesRecaptcha;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Contact extends Component
{
    public string $gRecaptchaResponse;

    public $showSuccessMessage;

    #[Validate('required|string|max:255')]
    public $name;

    #[Validate('required|email:dns,rfc|max:255')]
    public $email;

    #[Validate('required|string|min:80')]
    public $question;

    public function render()
    {
        return view('livewire.website.contact');
    }

    // #[ValidatesRecaptcha]
    public function save()
    {
        $this->validate();

        $lead = Lead::create([
            'name' => $this->name,
            'email' => $this->email,
            'question' => $this->question,
        ]);

        $user = User::first();

        $user->notify(new InquiryReceived($lead));

        $this->reset();

        $this->showSuccessMessage = true;
    }
}
