<?php

namespace App\View\Components\homepage;

use App\Models\PersonalInfo;
use Illuminate\View\Component;

class contact extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $personalinfo;
    public function __construct()
    {
        $this->personalinfo = PersonalInfo::first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.homepage.contact',['personalinfo'=>$this->personalinfo]);
    }
}
