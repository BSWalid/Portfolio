<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use Storage;

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

        $newImgName = time() . "-" . $request->title . '.' . $request->icon->extension();

        $request->icon->storeAs('/service_images',$newImgName);

         Service::create([
             'title'=>$request->title,
             'description'=> $request->description,
             'isactive'=>(boolean) $request->isactive,
             'icon'=>$newImgName,
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


        if($request->icon)
        {



            $path ="service_images" . "/" . str_replace("images/uploaded_images/service_images/","",$request->old_image);

            Storage::delete($path);
            $newImgName = time() . "-" . $request->title . '.' . $request->icon->extension();
            $request->icon->storeAs('/service_images',$newImgName);
            $service->update([
                'title'=>$request->title,
                'description'=> $request->description,
                'isactive'=> $request->isactive,
                'icon'=> $newImgName,
            ]);


        }else{

            $service->update([
                'title'=>$request->title,
                'description'=> $request->description,
                'isactive'=> $request->isactive,

            ]);
        }



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

        //delete images related
        $path ="service_images" . "/" . str_replace("images/uploaded_images/service_images/","",$service->icon);
        Storage::delete($path);

        return redirect()->route('service.index');

    }
}
