<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('user.daftarPengguna', compact('users'));
    }

    public function showUser($username) {
        $user = User::where('username', $username)->firstOrFail();
        return view('user.infoPengguna', compact('user'));
    }

    // Nama:Rahmat Pratami
    // Kelas:D3IF-46-03
    // NIM:6706223136

    
    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
    }

    public function show()
    {
        
    }
}