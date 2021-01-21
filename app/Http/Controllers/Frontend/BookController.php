<?php

namespace App\Http\Controllers\Frontend;

use App\Book;
use App\BorrowHistory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(10);
        return view('frontend.book.index', [
            'title' => 'Beranda Perpusku',
            'books' => $books,
        ]);
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('frontend.book.show', [
            'title' => $book->title,
            'book' => $book,
        ]);
    }

    public function borrow($id)
    {
        $book = Book::find($id);
        $user = Auth::user();

        if ($user->borrow()->where('books.id', $book->id)->where('returned_at', null)->count() > 0) {
            return redirect()->back()->with('toast', 'Kamu sudah meminjam buku dengan judul : ' . $book->title);
        }

        $user->borrow()->attach($book);
        $book->decrement('qty');
        
        return redirect()->back()->with('toast', 'Berhasil meminjam buku');

    }
}
