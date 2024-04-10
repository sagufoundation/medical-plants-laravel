<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DeleteButton extends Component
{
    public $id; 
    public function __construct($id)
    {
        $this->id = $id;
    }
    
    public function render()
    {
        return view('components.delete-button');
    }
}
