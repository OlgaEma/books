<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index() {
        $authors = Author::limit(10)->get();
        return view('admin.authors.index',compact('authors'));
    }

    public function create() {
        return view('admin.authors.create');
    }

    public function store(Request $request){
        $author = new Author;
        $author->name = $request->name;
        $author->bio = $request->bio;
        $author->save();
        return redirect()->route('admin.authors')->with('success', 'Author created successfully!');
    }
}