<!-- @extends('layouts.app')

@section('content')


<div class="container">
    <div class="col-md-12">
   
    <h3 aling="center"> Edit profile </h3>

    <form action="{{ route('students.update', $student->id) }}" method="post"  id="studentprofileedit" > 

    {{ csrf_field() }}
    <div class="form-group">
            
            <input type="hidden" class="form-control" name="id" value={{$studentprofile->id}} />
            <input type="hidden" class="form-control" name="_method" value="PUT" />
           
        </div>

        <div class="form-group">
        <label for="date_of_birth"> Date of Birth</label>
            <input type="text" class="form-control" name="date_of_birth" value="{{ $studentprofile->date_of_birth }}" />

        </div>

        <div class="form-group">
        <label for="phone_no"> phone no </label>
            <input type="text" class="form-control" name="phone_no" value="{{ $studentprofile-> phone_no}} " />

            
        </div>

        
        <div class="form-group">
        <label for="temporary_address"> Temporary Address</label>
            <input type="text" class="form-control" name="temporary_address"value="{{ $studentprofile-> temporary_address }}" />
        </div>


        
        <div class="form-group">
        <label for="image"> Image </label>  
            <input type="file" class="form-control" name="image"value="{{ $studentprofile-> image }}" />
        </div>

            

        <div class="form-group">
            
        <button type="edit" class="btn btn-primary-outline"> Save Edit </button>

        </div>
    </form>    


    </div>
    </div>

    @endsection

     -->