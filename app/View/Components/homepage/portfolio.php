<?php

namespace App\View\Components\homepage;

use App\Models\Project;
use Illuminate\View\Component;

class portfolio extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $projects;
    public function __construct()
    {
        $this->projects = Project::where('isactive',1)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.homepage.portfolio',[
            'projects' => $this->projects,
        ]);
    }
}
