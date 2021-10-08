<?php

namespace App\View\Components;

use App\Models\Article;
use Illuminate\View\Component;

class MostRecent extends Component
{
    public $mostRecentd;
    public $mostRecent;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->mostRecentd =Article::with('category:id,name')->where('features',"=",'slider-top')->latest('id')->limit(1)->get();
        $this->mostRecent =Article::where('features',"=",'mostPopular')->latest('id')->limit(2)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.most-recent');
    }
}
