<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\student;

use App\StudentProfile;

use App\StudentAddress;



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
    
// student profile coding

               $studentprofile = new studentprofile
              
               
                ([
                    'date_of_birth' => $request->get('date_of_birth'),
                    'phone_no' => $request->get('phone_no'),
                    'image' => $request->get('image'),
                    'temporary_address' => $request->get('temporary_address')
                  ]);
               
                  
                   
                     $studentprofile->student()->associate($student);
                     
                     $studentprofile->save();

// StudentAddresses coding

                     $studentaddress = new studentaddress
                    // dd($request->all());
                     ([
                         'key'=> $request->get('key'),
                        'value'=>$request->get('value')
                     ]);
                 $studentaddress->student()->associate($student);
                    // dd($request->all());
          
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

    // public function add($id)
    //        {
    //             $studentaddress = studentaddress::find($id);
    //        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

       
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
