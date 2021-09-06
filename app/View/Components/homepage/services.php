<?php

namespace App\View\Components\homepage;

use App\Models\Service;
use Illuminate\View\Component;

class services extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $services;
    public function __construct()
    {
        $this->services = Service::where('isactive',1)->get()->take(5);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.homepage.services',[
            'services'=>$this->services,
        ]);
    }
}
