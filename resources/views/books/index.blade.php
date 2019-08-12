@extends('layouts.app')

@section('content')
<!-- code for book in the index page  is here -->
<div class="container">
   <center><h1> <u>listing of books</u> </h1> </center>
    <a href="{{ route('books.create') }}" class="btn btn-success">Add New Book </a>

    <table class="table table-striped">
        <thead>
                    <tr>
                        <th> id </th>
                        <th> Book Name</th>
                        <th> Auther Name </th>
                        <th> Description </th>
                        <th> Status </th>
                        <th> dropdown </th>
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
                    <td>{{$book->status}}</td>
                    <input type="hidden" id="book-id" value="{{$book->id}}">
                        <td><select data-id="{{$book->id}}" name="stock" id="stock-manage">
                        <option value="0" @if ($book->status == 0) selected @endif> no stock</option>
                        <option value="1" @if ($book->status == 1) selected @endif> in stock </option>
                        
                    </select>
                    </td>
                

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
