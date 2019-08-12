
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-12">
        
             <h3 aling="center"> Create New Record  </h3>

            <form action="{{ route('students.store') }}" method="POST" id="students" >
        
                {{ csrf_field() }}
                
                <div class="form-group">
                    <label for="roll_no"> Roll no </label>
                    <input type="text" class="form-control" name="roll_no"><br/>
                   
                </div>

                <div class="form-group">
                    <label for="first_name"> First Name </label>
                    <input type="text" class="form-control" name="first_name"><br/>
                    
                </div>

                
                <div class="form-group">
                    <label for="last_name"> Last Name</label>
                    <input type="text" class="form-control" name="last_name"><br/>
                    
                </div>

                <div class="form-group">
                    <label for="address"> Address</label>
                    <input type="text" class="form-control" name="address"><br/>
               
                </div>

                <div class="form-group">
                    <label for="adharcard_address"> Address</label>
                    <input type="text" class="form-control" name="adharcard_address"><br/>
                   
                </div>

                <div class="form-group">
                    <label for="state"> State</label>
                    <input type="text" class="form-control" name="state"><br/>
                   
                </div>

                
                <div class="form-group">
                    <label for="city"> city</label>
                    <input type="text" class="form-control" name="city"><br/>
                   
                </div>

                      <div class="form-group">
                         <label for="status"> status </label>
                            <select name="status"> status
                                <option>   status </option>
                                 <option value="1"> in active </option>
                                 <option value="0"> no active </option>
                             </select> 
                       </div>

                <div>
                    <button type="submit" class="btn btn-primary-outline"> Add student data </button>

                </div>
            </form>    
    </div> 
</div>    
@endsection