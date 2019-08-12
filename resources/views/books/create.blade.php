@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-12">
        
             <h3 aling="center"> Create New Record  </h3>
            

            <form action="{{ route('books.store') }}" method="POST" id="books" >
        
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="book_name"> Book Name </label>
                    <input type="text" class="form-control" name="book_name"><br/>
                    
                </div>

                <div class="form-group">
                    <label for="auther_name"> Auther Name </label>
                    <input type="text" class="form-control" name="auther_name"><br/>
                    
                </div>

                
                <div class="form-group">
                    <label for="description"> Description </label>
                    <input type="text" class="form-control" name="description"><br/>
                    
                </div>
                      <div class="form-group">
                         <label for="status"> status </label>
                            <select name="status"> status
                                <option>   status </option>
                                 <option value="1">in stock </option>
                                 <option value="0"> no stock</option>
                             </select> 
                     </div>

                <div>
                    <button type="submit" class="btn btn-primary-outline"> Add book data </button>

                </div>
            </form>    
    </div> 
</div>    


             
@endsection