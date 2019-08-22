@extends('layouts.app')

@section('content')


<div class="container">
  <div class="col-md-12">

  <h3 aling="center"> Edit student </h3>

        <form action="{{ route('students.update', $student->id) }}" method="post" id="studentedit" >

       

                 {{ csrf_field() }}
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" value={{ $student->id}} />
                     <input type="hidden" class="form-control" name="_method" value="PUT" />


        </div>
           
                 

                 <div class="form-group">
                     <label for="roll_no"> Roll No </label><br/>
                     <input type="text" class="form-control" name="roll_no"  value={{ $student->roll_no }} />
      
                 </div>

                 <div class="form-group">
                     <label for="first_name"> First Name </label><br/>
                     <input type="text" class="form-control" name="first_name" value={{ $student-> first_name}}  />
                </div>

        
                 <div class="form-group">
                     <label for="last_name"> Lsat Name </label>
                     <input type="text" class="form-control" name="last_name"value={{ $student-> last_name }} />
                 </div>


                 <div class="form-group">
                     <label for="address"> Address</label>
                     <input type="text" class="form-control" name="address"value={{ $student-> address }} />
                 </div>

                <div class="form-group">
                     <label for="adharcard_address"> Adharcard Address </label>
                     <input type="text" class="form-control" name="adharcard_address" value={{ $student-> adharcard_address}}  />
                </div>
        
                 <div class="form-group">
                     <label for="state"> state </label>
                     <input type="text" class="form-control" name="state"value={{ $student-> state }} />
                 </div>

                 <div class="form-group">
                     <label for="city"> city </label>
                     <input type="text" class="form-control" name="city"value={{ $student-> city}} /><br/>
         
                 </div>


            <div class="form-group">
                  <label for="status"> status </label>
                     <select name="status"> status
                        <option>   status </option>
                        <option value="1"@if ($student->status == 1) selected @endif> in active </option>
                        <option value="0" @if ($student->status == 0) selected @endif> no active </option>
                        </select> 
             </div>
            


        <!-- students profiles edit fields -->

        <div class="form-group">
            <label for="date_of_birth"> Date Of Birth </label>
            <input type="date" class="form-control" name="date_of_birth"  value="{{\Carbon\Carbon::parse($student->student_profile->date_of_birth)->format('Y-m-d')}}" >
   
        </div>

            
        <div class="form-group">
            <label for="phone_no"> Phone No </label>
            <input type="number" class="form-control" name="phone_no" value="{{$student->student_profile->phone_no}}" />
           
        </div>

        
        <div class="form-group">
            <label for="temporary_address"> Temporary Address</label>
            <input type="text" class="form-control" name="temporary_address" value="{{$student->student_profile->temporary_address}}" />
            
        </div>

        <div class="form-group">
            <label for="image"> Image </label>
            <input type="file" class="form-control" name="image">
           
        </div>
            

        
        <div>
            <button type="edit" class="btn btn-primary-outline"> Save Edit </button>

        </div>

    </form>    
</div> 

    </div>
    </div>

    @endsection

    