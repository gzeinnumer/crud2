<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//todo 11 liat aja
//todo 12 buat create edit index layout

//todo 18
use App\Book;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //todo 22
        $books = Book::all();

        return view('index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //todo 15
        return view('create');
        //todo 16 php artisan serve
        //todo 17 test browser http://localhost/crud2/public/books/create

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //todo 19
        $validatedData = $request->validate([
            'book_name' => 'required|max:255',
            'isbn_no' => 'required|alpha_num',
            'book_price' => 'required|numeric',
        ]);
        $book = Book::create($validatedData);

        return redirect('/books')->with('success', 'Book is successfully saved');

        //todo 20 test browser submit aja
        //todo 21 lansung saja isi dan liat di database

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
        //todo 24
        $book = Book::findOrFail($id);

        return view('edit', compact('book'));
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
        //todo 27
        $validatedData = $request->validate([
            'book_name' => 'required|max:255',
            'isbn_no' => 'required|alpha_num',
            'book_price' => 'required|numeric',
        ]);
        Book::whereId($id)->update($validatedData);

        return redirect('/books')->with('success', 'Book is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //todo 28
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect('/books')->with('success', 'Book is successfully deleted');
    }
}
