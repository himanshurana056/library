@extends('layouts.app')

@section('content')
<!-- code for student in the index page  is here -->


<div class="container">
    <a href="{{ route('students.create') }}" class="btn btn-success">Add New student </a>


    <table class="table table-striped">
             <thead>
                    <tr>
                        <th> Id </th>
                        <th> Roll no</th>
                        <th> First Name </th>
                        <th> Last Name </th>
                        <th> Address </th>
                        <th> Adharcard Address </th>
                        <th> state </th>
                        <th> city </th>
                        <th colsapn = 2> Action </th>                                
                    </tr>
             </thead>
        <tbody>

            @foreach($students as $student)

                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->roll_no}}</td>
                    <td>{{$student->first_name}}</td>
                    <td>{{$student->last_name}}</td>
                    <td>{{$student->address}}</td>
                    <td>{{$student->adharcard_address}}</td>
                    <td>{{$student->state}}</td>
                    <td>{{$student->city}}</td>
                    
<!-- code for student edit -->
                    <td>
                        <a href="{{ route('students.edit',$student->id)}}" class="btn btn-primary">Edit</a>
                    </td>
<!-- code for student delete -->

                    <td>
                        <form action="{{ route('students.destroy',                      $student->id)}}" method="post">

                            <input type="hidden" name="_method" value="DELETE"/>
                            <button class="btn btn-primary"     type="submit">Delete</button>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </td>
                </tr>


                
        
            @endforeach
        </tbody>


     </table>
</div>   
@endsection  