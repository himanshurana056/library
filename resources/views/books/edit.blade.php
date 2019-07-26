@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-12">

<h3 aling="center"> Edit book </h3>


<form action="{{ route('books.update', $book->id) }}" method="post" >
        
        {{ csrf_field() }}
        <div class="form-group">
            <input type="hidden" class="form-control" name="id" value={{ $book->id}} />
            <input type="hidden" class="form-control" name="_method" value="PUT" />
        </div>

        <div class="form-group">
            <label for="book_name"> Book Name </label>
            <input type="text" class="form-control" name="book_name" value={{ $book->book_name }} />
        </div>

        <div class="form-group">
            <label for="auther_name"> Auther Name </label>
            <input type="text" class="form-control" name="auther_name" value={{ $book-> auther_name}}  />
        </div>

        
        <div class="form-group">
            <label for="description"> Description </label>
            <input type="text" class="form-control" name="description"value={{ $book-> description }} />
        </div>

        <div>
            <button type="edit" class="btn btn-primary-outline"> Save Edit </button>

        </div>
    </form>    
</div> 
</div>      
     



    
    @endsection