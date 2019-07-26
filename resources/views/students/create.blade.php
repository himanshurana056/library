@extends('layouts.app')

@section('content')

<div class="container">
        <div class="col-md-12">

                <h3 aling="center"> Create New Record</h3>
                
                <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error) 
              <li>{{ $error }}</li>
            @endforeach
            
        </ul>
      </div><br />
    @endif

                <form action="{{route('students.store')}}" method="post">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="roll_no"> Roll No </label>
                            <input type="text" class="form-control" name="roll_no">
                        </div>


                        <div class="form-group">
                            <label for="first_name"> First Name </label>
                            <input type="text" class="form-control" name="first_name">
                        </div>

                        <div class="form-group">
                            <label for="last_name"> Last Name </label>
                            <input type="text" class="form-control" name="last_name">
                        </div>

                        <div class="form-group">
                            <label for="class"> Address</label>
                            <input type="text"class="form-control" name="address">
                        </div>    

                        <div class="form-group">
                            <label for="class"> Adharcard Address</label>
                            <input type="text"class="form-control" name="adharcard_address">
                        </div> 

                        <div class="form-group">
                            <label for="class"> State </label>
                            <input type="text"class="form-control" name="state">
                        </div>

                        <div class="form-group">
                            <label for="class"> City </label>
                            <input type="text"class="form-control" name="city">
                        </div>


                        <div>
                            <button type="submit" class="btn btn-primary-outline"> Add Studnet </button>
                         </div>
                 </form>

   </div>

</div>
@endsection