<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ebook;
use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $ebooks = Ebook::all();
        $categories = category::all();
        return view('index', compact(['ebooks', 'categories']));
    }
    public function book(){
        $ebookCount =Ebook::count();
        $categoryCount = category::count();
        $userCount = User::count();
        $rentlogs = Rentlogs::with(['user', 'book']);
        return view('index', ['ebook_count' => $ebookCount,'category_count' => $categoryCount, 'user_count' => $userCount]);
    }
}
