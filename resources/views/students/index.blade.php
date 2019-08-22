@extends('layouts.app')

@section('content')
<!-- code for student in the index page  is here -->


<div class="container">

             <center><h1> <u>listing of students</u></h1></center>


             

    <a href="{{ route('students.create') }}" class="btn btn-success">Add New student </a>
    


    <table class="table table-striped">
             <thead>
                    <tr>
                        <th> Id </th>
                        <th> Roll no</th>
                        <th> First Name </th>
                        <th> Last Name </th>
                        <!-- <th> Address </th> -->
                        <th> Adharcard Address </th>
                        <th> state </th>
                        <th> city </th>
                        <th> status </th>
                        <th> dropdown </th>
                        
            <!-- students profiles -->
                         <!-- <th> Id </th> -->
                         <th> Date of Birth </th>
                         <th> Phone No</th>
                         <!-- <th> Temporary Address </th> -->
                         <th> Image </th>  
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
                    <!-- <td>{{$student->address}}</td> -->
                    <td>{{$student->adharcard_address}}</td>
                    <td>{{$student->state}}</td>
                    <td>{{$student->city}}</td>
                    <td>{{$student->status}}</td>
                     <input type="hidden" id ="student-id" value="{{$student->id}}">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <td><select data-id="{{$student->id}}" name="manage" id="manage-active">
                    <option value="1" @if ($student->status == 1) selected @endif> in active </option>
                        <option value="0" @if ($student->status == 0) selected @endif> no active </option>
                             </select> 
                              </td> 
                             <td>{{$student->student_profile->date_of_birth}}</td>
                             <td>{{$student->student_profile->phone_no}}</td>
                             <!-- <td>{{$student->student_profile->temporary_address}}</td> -->
                             <td>{{$student->student_profile->image}}</td> 
                    
                    
<!-- add more popup for StudentAddress -->
                    <td>
                   
                    <button onclick="myFunction()" class = "btn btn-primary">Add-More</button>
                        
                        <script>
                            function myFunction() 
                            {
                            window.open("{{ route('Student_addresses.create',$student->id)}}");
                            }   
                            </script>
                    
<!-- code for student edit -->
                    <td>
                        <a href="{{ route('students.edit',$student->id)}}" class="btn btn-primary">Edit</a>
                    </td>
<!-- code for student delete -->

                    <td>
                        <form action="{{ route('students.destroy',$student->id)}}" method="post">

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