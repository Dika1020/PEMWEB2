<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function index ()
    {
        // $books = DB::select('SELECT * FROM books');
        $books = Book::all();
        $books = Book::with('genre')->get();
        // dd($books);

        return view('admin.books.index', compact('books'));
    }

    public function create()
    {
        // Mengambil semua posisi untuk ditampilkan di form create
        $genres = Genre::all();
        return view('admin.books.create', compact('genres'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $data = $request->validate([
            "title" => 'required',
            "isbn" => 'required',
            "deskripsi" => 'required',
            "penulis" => 'required',
            "penerbit" => 'required',
            "cover_img" => 'required',
            "genres_id" => 'required|exists:genres,id'
        ]);

        // Jika request memiliki ID, lakukan update
        if ($request->has('id')) {
            $book = Book::find($request->id);
            if ($book) {
                $book->update($data);
            }
        } else {
            // Jika tidak ada ID, lakukan create
            Book::create($data);
        }

        // Redirect ke halaman index employee
        return redirect()->route('books.index');
    }

    public function edit(string $id)
{
    $book = Book::find($id);
    if (!$book) {
        return redirect()->route('admin.book.index')->with('error', 'book not found');
    }
    
    $genres = Genre::all();
    return view('admin.books.edit', compact('book', 'genres'));
}

    public function delete(string $id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect()->route('books.index');
    }
}
