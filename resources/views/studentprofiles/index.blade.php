@extends('layouts.app')

@section('content')


<div class="container">

             <center><h1> <u> student profile </u></h1></center>

<a href="{{ route('studentprofiles.create') }}" class="btn btn-success"> create the profile </a>


    <table class="table table-striped">
             <thead>
                    <tr>
                        <th>Id </th>
                        <th> Date of Birth </th>
                        <th> Phone No</th>
                        <th> Temporary Address </th>
                        <th> Image </th>  
                        <th colsapn = 2> Action </th>                              
                    </tr>
             </thead>
             <tbody>
                @foreach($studentprofiles as $studentprofile)
                <tr>
                    <td>{{$studentprofile->id}}</td>
                    <td>{{$studentprofile->date_of_birth}}</td>
                    <td>{{$studentprofile->phone_no}}</td>
                    <td>{{$studentprofile->temporary_address}}</td>
                    <td>{{$studentprofile->image}}</td>
                   
            
           

            <td>
                        <a href="{{ route('studentprofiles.edit',$studentprofile->id)}}" class="btn btn-primary">Edit</a>
                    </td>

                    <td>
                        <form action="{{ route('studentprofiles.destroy', $studentprofile->id)}}" method="post">
                        
                        <input type="hidden" name="_method" value="DELETE"/>
                        <button class="btn btn-primary" type="submit">Delete</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </td>
                    </tr>
                @endforeach
        </tbody>

    </table>

</div>
@endsection
 