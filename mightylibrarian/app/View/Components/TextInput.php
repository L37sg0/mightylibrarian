<?php

namespace App\View\Components;

use Illuminate\View\Component;

class textInput extends Component
{
    public $id;
    public $name;
    public $label;
    public $value;
    public $placeholder;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $id = null,
        string $name = null,
        string $label = null,
        string $value = null,
        string $placeholder = null
    )
    {
        $this->id       = $id;
        $this->name     = $name;
        $this->label        = $label;
        $this->value        = $value;
        $this->placeholder      = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.text-input');
//            , [
//            'id'            => $this->id,
//            'name'          => $this->name,
//            'label'         => $this->label,
//            'value'         => $this->value,
//            'placeholder'   => $this->placeholder,
//        ]);
    }
}
