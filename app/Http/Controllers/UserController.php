<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ebook;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $Users = user::all();
        return view('tables-data', compact('Users'));
    }
    public function profile()
    {
        $id = Auth::user()->id;
        $userData = user::find($id);
        $Users = User::all();
        $ebooks = Ebook::all();
        return view('profile', compact(['Users', 'ebooks','userData']));
    }
    public function store(Request $request)
    {
        $request->validate([
            'absen' => 'required',
            'nama' => 'required|unique',
            'kelas' => 'required',
            'jurusan' => 'required',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
        ]);
    }
    // public function update()
    // {
    //     return view('update');
    // }
    public function edit($id)
    {
        $Users = user::find($id);
        return view('update', ['Users' => $Users]);
    }
    public function post($id, Request $request)
    {
        $Users = user::find($id);
        $Users->update($request->except(['_token','submit']));
        return redirect('tables-data');
    }

    public function delete($id)
    {
        $data = user::find($id);
        $data->delete();
        return back()->with('succes', 'data berhasil di hapus');
    }
    public function userprofile(){
        $id = Auth::user()->id;
        $userData = user::find($id);
        return view('users-profile',compact('userData'));
    }
    public function adminprofile(){
        $id = Auth::user()->id;
        $adminData = user::find($id);
        return view('admin-profile',compact('adminData'));
    }
}
