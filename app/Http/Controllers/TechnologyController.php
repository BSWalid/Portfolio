<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\StoreTechnoogyRequest;
use App\Http\Requests\UpdateLinkRequest;
use App\Http\Requests\UpdateTechnoogyRequest;
use App\Models\Link;
use App\Models\Technology;
use Illuminate\Http\Request;
use Storage;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $technologies = Technology::paginate(10);
        return view('admin.technologies.index',['technologies'=>$technologies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.technologies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTechnoogyRequest $request)
    {
        $request->validated();

        $newImgName = time() . "-" . $request->name . '.' . $request->icon->extension();
        $request->icon->storeAs('/technologies_images',$newImgName);


        Technology::create([
            'name'=>$request->name,
            'icon'=>$newImgName,

        ]);
        return redirect()->route('technologies.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function show(Link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Technology  $link
     * @return \Illuminate\Http\Response
     */
    public function edit(Technology $technology)
    {
        $technologyRequested = Technology::findorfail($technology->id);

        return view('admin.technologies.edit', ['technology'=>$technologyRequested]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\UpdateTechnoogyRequest  $request
     * @param  \App\Models\Technology  $link
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTechnoogyRequest $request, Technology $technology)
    {
        $request->validated();
        $technologyRequested = Technology::findorfail($technology->id);

        if($request->icon)
        {

            $path ="technologies_images" . "/" . str_replace("images/uploaded_images/technologies_images/","",$request->old_image);
            Storage::delete($path);
            $newImgName = time() . "-" . $request->name . '.' . $request->icon->extension();
            $request->icon->storeAs('/technologies_images',$newImgName);

            $technologyRequested -> update([
                'name'=>$request->name,
                'icon'=>$newImgName

            ]);

        }else
        {
            $technologyRequested -> update([
                'name'=>$request->name,
            ]);

        }


        return redirect()->route('technologies.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function destroy(Technology $technology)
    {


        technology::destroy($technology->id);
        //delete related image
        $path ="technologies_images" . "/" . str_replace("images/uploaded_images/technologies_images/","",$technology->icon);
        Storage::delete($path);

        return redirect()->route('technologies.index');
    }
}
