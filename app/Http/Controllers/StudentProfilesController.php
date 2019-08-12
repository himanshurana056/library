<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\studentprofile;

class StudentProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentprofiles = studentprofile::all();
        return view('studentprofiles.index',compact('studentprofiles'));
        //dd("himamshu");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('studentprofiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request->all());
        $studentprofile = new studentprofile
       ([
          'date_of_birth' => $request->get('date_of_birth'),
          'phone_no' => $request->get('phone_no'),
          'temporary_address' => $request->get('temporary_address'),
          'image' => $request->get('image'), 
        ]);
        $studentprofile->save();
        
        // dd($studentprofile);
        return redirect('/studentprofiles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // dd($id);
        $studentprofile = studentprofile::find($id);
      //echo "<pre>"; print_r($students); die;
        return view('studentprofiles.edit',compact('studentprofile'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $studentprofile = studentprofile::find($id);
        
        //dd($request->all());

       $studentprofile->date_of_birth = $request->get('date_of_birth');
       $studentprofile->phone_no = $request->get('phone_no');
       $studentprofile->temporary_address = $request->get('temporary_address');
       $studentprofile->image = $request->get('image');
      
      
       $studentprofile->save();
      
       return redirect('studentprofiles')->with('success','studentprofile updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $studentprofile = studentprofile::find($id);
        $studentprofile->delete();

        return redirect('studentprofiles')->with('success','studentprofile deleted');
    }
}
