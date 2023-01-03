<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Cardsatlet extends Component
{
    public $atlet;
    public function render()
    {
        return view('livewire.components.cardsatlet', [$this->atlet]);
    }
}
