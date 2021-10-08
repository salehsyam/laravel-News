<?php

namespace App\View\Components;

use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class Video extends Component
{

    public $videos;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->videos=DB::table('videos')->get();
  }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.video');
    }
}
