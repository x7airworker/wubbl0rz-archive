<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ClipComponent extends Component
{
    public $clip;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($clip)
    {
        $this->clip = $clip;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.clip-component');
    }
}
