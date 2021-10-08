<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Textarea extends Component
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
     * The maximum length of input.
     *
     * @var int
     */
    public $max;


    public $value;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  string  $label
     * @param  string  $placeholder
     *
     * @return void
     */
    public function __construct($name = "text", $label = "Text Input", $placeholder = "Enter Text", $max = 200,$value="")
    {

        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->max = $max;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.textarea');
    }
}
