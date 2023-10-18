<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\DataTables\UserDataTable;

class UserController extends Controller
{
    // Nama    : Rahmat Pratami
    // NIM     : 6706223136
    // Kelas   : D3IF-4603
    
    // public function index() {
    //     $users = User::all();
    //     return view('user.daftarPengguna', compact('users'));
    // }
    public function index(UserDataTable $dataTable)
    {
        return $dataTable->render('user.daftarPengguna');
    }

    public function showUser($username) {
        $user = User::where('username', $username)->firstOrFail();
        return view('user.infoPengguna', compact('user'));
    }

    public function create()
    {
    return view('user.registrasi');
    }

    public function store(Request $request)
    {
        
    }

    public function show()
    {
        
    }
}