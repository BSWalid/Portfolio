<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::paginate(10);
        return view('admin.service.index',['services'=>$services,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request)
    {
         $request->validated();
         Service::create([
             'title'=>$request->title,
             'description'=> $request->description,
             'isactive'=>(boolean) $request->isactive,
         ]);
         return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)

    {

        $serviceRequested = Service::findorfail($service->id);



        return view('admin.service.edit',['service'=>$serviceRequested]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $request->validated();
        $service = Service::findorfail($service->id);

        $service->update([
            'title'=>$request->title,
            'description'=> $request->description,
            'isactive'=> $request->isactive,
        ]);
        return redirect()->route('service.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {

        Service::destroy($service->id);
        return redirect()->route('service.index');

    }
}
