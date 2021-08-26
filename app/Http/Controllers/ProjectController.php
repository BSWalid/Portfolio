<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::paginate(10);
        return view('admin.project.index',['projects'=>$projects,]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::where('isactive',1)->get();
        return view('admin.project.create',['services'=>$services,]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
         $request->validated();
         $service= Service::findorfail($request->service);



         $service->projects()->create([

            'title'=>$request->title,
            'description'=> $request->description,
            'isactive'=>(boolean) $request->isactive,
            'img'=>'someUrl',
            'contribution'=>$request->isactive,

        ]);

         return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)

    {

        $projectRequested = Project::findorfail($project->id);
        $services = Service::where('isactive',1)->get();



        return view('admin.project.edit',['project'=>$projectRequested,'services'=>$services]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $request->validated();
         $project= Project::findorfail($project->id);



         $project->update([

            'title'=>$request->title,
            'description'=> $request->description,
            'isactive'=>(boolean) $request->isactive,
            'img'=>'someUrl',
            'contribution'=>$request->isactive,

        ]);



        return redirect()->route('project.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {

        Project::destroy($project->id);
        return redirect()->route('project.index');

    }
}
