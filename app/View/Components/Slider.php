<?php

namespace App\View\Components;

use App\Models\Article;
use Illuminate\View\Component;

class Slider extends Component
{
    public $slider8;
    public $slider4;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->slider8 =Article::with('category:id,name','user:id,name')->where('features',"=",'slider-top')->latest('id')->limit(3)->get();
        $this->slider4 =Article::with('category:id,name','user:id,name')->where('features',"=",'slider-top')->latest('id')->limit(2)->get();

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.slider');
    }
}
