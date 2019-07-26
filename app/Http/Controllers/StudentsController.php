<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
         $students = student::all();
        return view('students.index',compact('students'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
            // $request->validate([
            //     'roll_no'=>'required',
            //     'first_name'=>'required',
            //     'last_name'=>'required',
            //     'address'=>'required',
            //     'adharcard_address'=>'required',
            //     'state'=>'required',
            //     'city'=> 'required'
            // ]);
    
        //  dd($request->all());
        $student = new student ([
            'roll_no'   => $request->get('roll_no'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'address' => $request->get('address'),
            'adharcard_address' => $request->get('adharcard_address'),
            'state' => $request->get('state'),
            'city' => $request->get('city')
        ]);
       $student->save();
       return redirect('students')->with('success','student saved!');
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
        $student = student::find($id);
      //echo "<pre>"; print_r($students); die;
        return view('students.edit',compact('student'));
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

        // $request->validate([
        //     'roll_no'=>'required',
        //     'first_name'=>'required',
        //     'last_name'=>'required',
        //     'address'=>'required',
        //     'adharcard_address'=>'required',
        //     'state'=>'required',
        //     'city'=> 'required'
        // ]);

        $student = student::find($id);

        $student->roll_no = $request->get('roll_no');
        $student->first_name = $request->get('first_name');
        $student->last_name = $request->get('last_name');
        $student->address = $request->get('address');
        $student->adharcard_address = $request->get('adharcard_address');
        $student->state = $request->get('state');
        $student->city = $request->get('city');
        
        $student->save();
        return redirect('students')->with('success','student updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        // dd("here");
        $student = student::find($id);
        $student->delete();

        return redirect('students')->with('success','student deleted');

    }
}
