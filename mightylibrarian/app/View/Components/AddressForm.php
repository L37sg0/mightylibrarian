<?php

namespace App\View\Components;

use Illuminate\View\Component;


class AddressForm extends Component
{
    public $id;
    public $name;
    public $label;
    public $currentAddress;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $id = null,
        $name = null,
        $label = null,
        $currentAddress = []
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->currentAddress = $currentAddress;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.address-form');
    }
}
