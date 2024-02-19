<?php

namespace App\Http\Controllers;

use App\Models\Ebook;
use Illuminate\Http\Request;

class ebookController extends Controller
{
    public function index(){
        $ebooks = Ebook::all();
        dd($ebooks);
        return view('index', compact('ebooks'));
    }
}
