@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-12">
        
             <h3 aling="center"> Create New Record  </h3>

    
             
        
            <form action="{{ route('books.store') }}" method="POST" >
        
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="book_name"> Book Name </label>
                    <input type="text" class="form-control" name="book_name">
                </div>

                <div class="form-group">
                    <label for="auther_name"> Auther Name </label>
                    <input type="text" class="form-control" name="auther_name">
                </div>

                
                <div class="form-group">
                    <label for="description"> Description </label>
                    <input type="text" class="form-control" name="description">
                </div>

                <div>
                    <button type="submit" class="btn btn-primary-outline"> Add book data </button>

                </div>
            </form>    
    </div> 
</div>      
             
@endsection