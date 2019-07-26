@extends('layouts.app')

@section('content')


<div class="container">
    <div class="col-md-12">
    
<!--     

            @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}  
            </div>
            @endif
            </div>
     

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif -->


    <h3 aling="center"> Edit Student </h3>

    <form action="{{ route('students.update', $student->id) }}" method="post" >

    {{ csrf_field() }}
    <div class="form-group">
            <input type="hidden" class="form-control" name="id" value={{ $student->id}} />
            <input type="hidden" class="form-control" name="_method" value="PUT" />
        </div>

        <div class="form-group">
            <label for="roll_no"> Roll No </label>
            <input type="text" class="form-control" name="roll_no" value={{ $student->roll_no }} />
        </div>

        <div class="form-group">
            <label for="first_name"> First Name </label>
            <input type="text" class="form-control" name="first_name" value={{ $student-> first_name}}  />
        </div>

        
        <div class="form-group">
            <label for="last_name"> Lsat Name </label>
            <input type="text" class="form-control" name="last_name"value={{ $student-> last_name }} />
        </div>


        <div class="form-group">
            <label for="last_name"> Address</label>
            <input type="text" class="form-control" name="address"value={{ $student-> address }} />
        </div>

        <div class="form-group">
            <label for="last_name"> Adharcard Address</label>
            <input type="text" class="form-control" name="address"value={{ $student-> adharcard_address }} />
        </div>
        
        <div class="form-group">
            <label for="last_name"> state </label>
            <input type="text" class="form-control" name="address"value={{ $student-> state }} />
        </div>

        <div class="form-group">
            <label for="last_name"> city </label>
            <input type="text" class="form-control" name="address"value={{ $student-> city}} />
        </div>

        <div>
            <button type="edit" class="btn btn-primary-outline"> Save Edit </button>

        </div>
    </form>    
</div> 

    </div>
    </div>

    @endsection