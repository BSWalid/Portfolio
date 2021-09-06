<?php

namespace App\View\Components\homepage;

use App\Models\Link;
use App\Models\PersonalInfo;
use Illuminate\View\Component;

class Hero extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $personalinfo;
    public $links;

    public function __construct()
    {
        $this->personalinfo = PersonalInfo::first();
        $this->links = Link::all();


    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.homepage.hero',[
            'personalinfo',$this->personalinfo,
            'links',$this->links,
        ]);
    }
}
