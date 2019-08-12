@extends('layouts.app')

@section('content')


<div class="container">
    <div class="col-md-12">
   
    <h3 aling="center"> Edit book </h3>

    <form action="{{ route('books.update', $book->id) }}" method="post"  id="bookedit" > 

    {{ csrf_field() }}
    <div class="form-group">
            <input type="hidden" class="form-control" name="id" value={{ $book->id}} />
            <input type="hidden" class="form-control" name="_method" value="PUT" />
           
        </div>

        <div class="form-group">
        <label for="book_name"> Book Name </label>
            <input type="text" class="form-control" name="book_name" value={{ $book->book_name }} />

            <!-- @if ($errors->has('roll_no'))
                            <span class="alert alert-danger"> Roll no is Required </span>
                            @endif -->
        </div>

        <div class="form-group">
        <label for="auther_name"> Auther Name </label>
            <input type="text" class="form-control" name="auther_name" value={{ $book-> auther_name}}  />

            <!-- @if ($errors->has('first_name'))
                            <span class="alert alert-danger"> First Name  is Required </span>
                            @endif -->
        </div>

        
        <div class="form-group">
        <label for="description"> Description </label>
            <input type="text" class="form-control" name="description"value={{ $book-> description }} />
        </div>


            <div class="form-group">
            <label for="status"> status </label>
                <select name="status"> status
                    <option>   status </option>
                    <option value="1" @if ($book->status == 1) selected @endif > in stock</option>
                    <option value="0" @if ($book->status == 0) selected @endif > no stock </option>
                    </select>
             </div>
            

        <div>
            
        <button type="edit" class="btn btn-primary-outline"> Save Edit </button>

        </div>
    </form>    
</div> 

    </div>
    </div>

    @endsection

    