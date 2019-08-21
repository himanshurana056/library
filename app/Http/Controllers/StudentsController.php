<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\student;

use App\StudentProfile;





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
         //dd("himanshu");
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

        
         $status = $request->status;
        
         $student = new student
       
         ([
            'roll_no'   => $request->get('roll_no'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'address' => $request->get('address'),
            'adharcard_address' => $request->get('adharcard_address'),
            'state' => $request->get('state'),
            'city' => $request->get('city'),
            'status' => $request->get('status')  
        ]);
    
       $student->save();
    
        // student profile editing
               $studentprofile = new studentprofile
              
               
                ([
                    'date_of_birth' => $request->get('date_of_birth'),
                    'phone_no' => $request->get('phone_no'),
                    'image' => $request->get('image'),
                    'temporary_address' => $request->get('temporary_address')
                  ]);
               
                  //dd($request->all());
                   
                     $studentprofile->student()->associate($student);
                     
                     $studentprofile->save();
                     
           //dd($request->all());
       return redirect('/students')->with('success','student saved!');
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     //  echo "<h1> joining of table </h1>";
       
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

        //$studentprofile = studentProfile::find($id);
       
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

        
        //dd($request->all());
       
       
         $student = Student::find($id);
      
         $status = $request->status;
         

        $student->roll_no = $request->get('roll_no');
        $student->first_name = $request->get('first_name');
        $student->last_name = $request->get('last_name');
        $student->address = $request->get('address');
        $student->adharcard_address = $request->get('adharcard_address');
        $student->state = $request->get('state');
        $student->city = $request->get('city');
        $student->status = $request->get('status');
        
        $student->save();

      
        $profile = $student->student_profile;
         //dd($request->all());
               
                $profile->date_of_birth = $request->input('date_of_birth');
                $profile->phone_no = $request->input('phone_no');
                $profile->image = $request->input('image');
               
         
    

          $student->student_profile->save();
        return redirect('students')->with('success','students updated');

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
    //ajax used in laravel
    
        public function activeStore(Request $request)
        {  
             //dd($request->all());
      
        $student = student::find($request->input('id'));    
        $student->status = $request->input('valu');
       

        $student->save();
        return response()->json(true);
        }


}
