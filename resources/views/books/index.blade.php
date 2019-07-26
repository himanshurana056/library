@extends('layouts.app')

@section('content')
<!-- code for book in the index page  is here -->
<div class="container">
    <a href="{{ route('books.create') }}" class="btn btn-success">Add New Book </a>

    <table class="table table-striped">
        <thead>
                    <tr>
                        <th> id </th>
                        <th> Book Name</th>
                        <th> Auther Name </th>
                        <th> Description </th>
                        <th colsapn = 2> Action </th>
                    </tr>
                </thead>  
                <tbody>
                @foreach($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->book_name}}</td>
                    <td>{{$book->auther_name}}</td>
                    <td>{{$book->description}}</td>

<!-- code for book edit button-->
                    <td>
                        <a href="{{ route('books.edit',$book->id)}}" class="btn btn-primary">Edit</a>
                    </td>
<!-- code for book delete button-->
                
                   <td>
                        <form action="{{ route('books.destroy', $book->id)}}" method="post">
                        
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
