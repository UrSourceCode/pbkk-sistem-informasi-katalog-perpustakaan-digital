<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Validator;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Book::all();
        return view('home', [
            'data' => $data,
            'title' => "Books Catalog",
        ]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $categories = Category::all();
        return view('admin-create-book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'cover'=> 'image|file|mimes:png,jpeg,jpg|max:2048',
            'author'=>'required',
            'publisher'=>'required',
            'year'=>'required',
            'category'=>'required',
            'isbn'=>'required|min:13|max:13',
            'synopsis'=>'required',
        ]);
        

        // $data= $request->all();
        if($request->file('cover')) {
                $filenameWithExt = $request->file('cover')->getClientOriginalName();
                // Get Filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just Extension
                $extension = $request->file('cover')->getClientOriginalExtension();
                // Filename To store
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                // Upload Image
                $path = $request->file('cover')->storeAs('public/cover', $fileNameToStore);
            
    //         $data['gambar']=$request->file('gambar')->store('post-gambar');
        };
            $author = Author::where('name', '=', Str::lower($request->author))->first();
            if ($author === null) {
                // book doesn't exist
                $author = new Author;
                $author->name = $request->author;
                $author->save();
            }

            $category = Category::where('name', '=', Str::lower($request->category))->first();
            if ($category === null) {
                // book doesn't exist
                $category = new Category;
                $category->name = $request->category;
                $category->save();
            }

        $book = new Book;
        $book->category_id = $category->id;
        $book->author_id = $author->id;
        $book->publisher_id = $request->publisher;
        $book->title = $request->title;
        $book->synopsis = $request->synopsis;
        $book->year = $request->year;
        $book->isbn = $request->isbn;
        $book->image = $fileNameToStore;
        $book->save();

        

        return redirect()->route('home.admin')->with('tambah_produk', 'Produk berhasil ditambahkan');
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
        $data = Book::where('id', $id)->first();
        return view('detail-book', [
            'data'=> $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Book::where('id', $id)->first();
        return view('admin-edit-book', [
            'data' => $data
        ]);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $image_path = public_path()."/storage/cover/".$book->image;
        unlink($image_path);
        $book->delete();
   
        return redirect()->route('home.admin')->with('hapus_data', 'Produk Telah Dihapus');
    }

}