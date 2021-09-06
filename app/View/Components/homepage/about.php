<?php

namespace App\View\Components\homepage;

use App\Models\PersonalInfo;
use App\Models\Technology;
use Illuminate\View\Component;

class about extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $personalinfo;
    public $technologies;
    public function __construct()
    {
        $this->personalinfo = PersonalInfo::first();
        $this->technologies = Technology::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.homepage.about',[
            'personalinfo',$this->personalinfo,
            'technologies',$this->technologies,
        ]);
    }
}
