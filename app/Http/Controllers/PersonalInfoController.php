<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePersonalInfoRequest;
use App\Models\PersonalInfo;
use Illuminate\Http\Request;
use Storage;

class PersonalInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personalinfo = PersonalInfo::first();
        return view('admin.personalinfo.index',['personalinfo'=>$personalinfo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonalInfo  $personalInfo
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalInfo $personalInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonalInfo  $personalInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonalInfo $personalInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\UpdatePersonalInfoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonalInfoRequest $request, String $personalInfo)
    {


        $request->validated();
        $personalInfo=PersonalInfo::findorfail($personalInfo);

        if($request->img)
        {

            $path ="personalinfo_images" . "/" . str_replace("images/uploaded_images/personalinfo_images/","",$request->old_image);

            Storage::delete($path);
            $newImgName = time() .  '.' . $request->img->extension();
            $request->img->storeAs('/personalinfo_images',$newImgName);

            $personalInfo->update([

                'name'=>$request->name,
                'short_bio'=>$request->short_bio,
                'about_me'=>$request->about_me,
                'img'=>$newImgName,

            ]);

        }else
        {

            $personalInfo->update([

                'name'=>$request->name,
                'short_bio'=>$request->short_bio,
                'about_me'=>$request->about_me,

            ]);

        }




        return redirect()->route('personalinfo.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonalInfo  $personalInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalInfo $personalInfo)
    {
        //
    }
}
