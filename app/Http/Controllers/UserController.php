<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function index(){
        return view('user.daftarPengguna');
    }

    public function create(){
        return view ('user.registrasi');
        
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
        $user = User::findorFail($id);
        $user->update([
            'fullname' => $request->fullname,
            'password' => $request->password,
            'email' => $request->email,
            'address' => $request->address,
            'phonenumber' => $request->phonenumber,
        ]);
        return redirect()
            ->route('user')
            ->with('success', 'User updated successfully.');

        return redirect()->route('user');
    }
    

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $user = User::findorFail($id);
        return view('userEdit', compact('user'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'fullname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'password' => ['required'],
            'address' => ['required', 'string', 'max:255'],
            'phonenumber' => ['required', 'string', 'max:255'],
            'birthdate' => ['required', 'date', 'max:255'],
        ]);

        $user = User::create([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'birthdate' => $request->birthdate,
            'phonenumber' => $request->phonenumber
        ]);
        return redirect()
            ->route('user')
            ->with('success', 'User created successfully.');
    }
    public function getAllUsers() {
        $Users = DB::table('Users')
        ->select(
            'id as id',
            'fullname as fullname',
            'email as email',
            'username as username',
            'address as address',
            'phonenumber as phonenumber',
            'birthdate as birthdate',
        )
        ->orderBy('fullname', 'asc')
        ->get();

        return DataTables::of($Users)
        ->addColumn('action', function ($user){
            $html = '
            <a href="' . route('userView', $user->id) .'" data-rowid="" class="btn btn-xs btn-light" data-toggle="tooltip" data-placement="top"
                data-container="body" title="Edit User" onclick="infoUser('."'".$user->id."'".')">
            <i class="fa fa-edit"></i>
            ';
            return $html;
        })
        ->make(true);
    }

    public function show(User $user){
        return view ('user.infoPengguna', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findorFail($id);
        $user->delete();
        return redirect()->route('user');
    }
}