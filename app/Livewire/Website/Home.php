<?php

namespace App\Livewire\Website;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends Component
{
    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.website.home');
    }
}
