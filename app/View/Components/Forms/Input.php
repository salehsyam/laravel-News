<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * The input name.
     *
     * @var string
     */
    public $name;
    /**
     * The input label.
     *
     * @var string
     */
    public $label;
    /**
     * The input placeholder.
     *
     * @var string
     */
    public $placeholder;
    /**
     * The input placeholder.
     *
     * @var string
     */
    public $value;




    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  string  $label
     * @param  string  $placeholder
     *
     *
     * @return void
     */

    public function __construct($name = "text", $label = "Text Input", $placeholder = "Enter Text",$value="" )
    {
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->value = $value;


    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.input');
    }
}
