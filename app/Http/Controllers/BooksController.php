<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\book;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = book::all();
    return view('books.index',compact('books'));
    }

    // public function viewBook()
    // {
    //    return view('books.index');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        // $request->validate([
        //     'book_name'=>'required',
        //     'auther_name'=>'required',
        //     'description'=>'required',
        // ]);


        //dd($request->all());
        $status = $request->status;
        $book = new book ([
            'book_name'   => $request->get('book_name'),
            'auther_name' => $request->get('auther_name'),
            'description' => $request->get('description'),
            'status' => $request->get('status')
        ]);
       $book->save();
       return redirect('/books')->with('success','contact saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = book::find($id);
        // echo "<pre>"; print_r($books); die;
        return view('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {




        // $request->validate([
        //     'book_name'=>'required',
        //     'auther_name'=>'required',
        //     'description'=>'required',
        // ]);
        

        $book = book::find($id);
        $status = $request->status;
        $book->book_name = $request->get('book_name');
        $book->auther_name = $request->get('auther_name');
        $book->description = $request->get('description');
        $book->status = $request->get('status');
        
        $book->save();
        return redirect('books')->with('success','contact updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $book = book::find($id);
       $book->delete();
       
       return redirect('books')->with('success','book deleted');
    }



    public function getStatus(Request $request)
    {  
        // dd($request->all());
      $book = book::find($request->query('id'));    
      $book->status = $request->query('valu');

     $book->save();
     return response()->json(true);
    }

// applying auth login -----

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

}
    
        


    
