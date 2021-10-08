<?php

namespace App\View\Components;

use App\Models\Article;
use Illuminate\View\Component;

class trendNews extends Component
{

    public $trendNews;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->trendNews=Article::where('features',"=",'trendNews')->latest('id')->limit(5)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.trend-news');
    }
}
