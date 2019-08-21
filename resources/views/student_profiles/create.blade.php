<!-- @extends('layouts.app')

@section('content')


<div class="container">
    <div class="col-md-12">
   
<h1> Student profile </h1>

    <form action="{{ route('student_profiles.store') }}" method="POST" id="studentprofiles" >
     
    
        
        {{ csrf_field() }}
    
        <div class="form-group">
            <label for="date_of_birth"> Date Of Birth </label>
            <input type="date" class="form-control" name="date_of_birth">
   
        </div>

            
        <div class="form-group">
            <label for="phone_no"> Phone No </label>
            <input type="number" class="form-control" name="phone_no">
           
        </div>

        
        <div class="form-group">
            <label for="temporary_address"> Temporary Address</label>
            <input type="text" class="form-control" name="temporary_address">
            
        </div>

        <div class="form-group">
            <label for="image"> </label>
            <input type="file" class="form-control" name="image">
           
        </div>

      
        <div>
            <button type="submit" class="btn btn-primary-outline"> save profile </button>

        </div>
    </form>    
</div> 
</div>    






@endsection -->