<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TotalContributors extends Component
{
    public $total; 
    public function __construct($total)
    {
        $this->total = $total;
    }

    public function render()
    {
        return view('components.totals.total-contributors');
    }
}
