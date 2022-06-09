<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $getbooks = Book::get()->toArray();
        return response()->json($getbooks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated= $request->validate([
            'content'=>'required',
            'author'=>'required',
        ]);
        $addbook = new Book ();
        $addbook->content=request('content');
        $addbook->author=request('author');
        $addbook->title=request('title');
        $addbook->save();
        return response()->json('You have successfuly added');


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
        $getbook = Book::findOrFail($id);
        return response()->json([$getbook],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
        $updatebook = Book::findOrFail($id);
        $updatebook->content=request('content');
        $updatebook->author=request('author');
        $updatebook->title=request('title');
        $updatebook->update();
        return response()->json(['message'=>'You have successfully updated'],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $deletebook = Book::findOrFail($id);
        $deletebook->delete();
        return response()->json('You have successfully Deleted a book');
    }
}
