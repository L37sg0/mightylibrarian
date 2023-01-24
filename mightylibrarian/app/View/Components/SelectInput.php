<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SelectInput extends Component
{
    public $id;
    public $name;
    public $label;
    public $currentCase;
    public $cases;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $id = null,
        string $name = null,
        string $label = null,
        $currentCase = null,
        $cases = null
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->currentCase = $currentCase;
        $this->cases = $cases;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.select-input');
    }
}
