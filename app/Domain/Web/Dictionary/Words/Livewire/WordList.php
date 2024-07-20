<?php

namespace Domain\Web\Dictionary\Words\Livewire;

use Livewire\Component;

class WordList extends Component
{
    public function render()
    {
        return view('dictionary.words.list');
    }
}
