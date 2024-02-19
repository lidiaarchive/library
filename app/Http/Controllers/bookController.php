<?php

namespace App\Http\Controllers;


use App\Models\book;
use App\Models\Ebook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class bookController extends Controller
{
    public function registerprocess(Request $request){

        $validated = $request->validate([
            'username' => 'required',
            'password'=> 'required|max:255',
            'phone'=> 'required |max:255',
            'address'=> 'required'
        ]);
    }
    public function index(){
        return view('components-alerts');
    }
    public function form()
    {
        return view('book-form');
    }
    public function formpost(Request $request)
    {
        $validated = $request->validate([
            'isbn',
            'cover',
            'judul',
            'pengarang',
            'penerbit',
            'tahun_terbit',
            'pdf',
        ]);

        $user = book::create($request->all());

        Session::flash('status', 'succes');
        Session::flash('message', 'registration successful');
        return redirect('book-form');
    }
    public function buku(){
        $ebooks = Ebook::all();
        return view('tables-buku', compact('ebooks',));
    }

}
