<?php

namespace App\Http\Controllers\Admin;
//agrear /Admi y controller
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
       
        $users = User::select(
            "id",
            "name",
            "email",
            "password",
            "role",
        )->get();
        
        // return view('/Admi/readUsers')->with(['users' => $users]);
        // $users =User::all();
        // return view('/Admi/readUsers', compact('users')) ;
        return view('/Admi/readUsers')->with(['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $users = User::find($id);

        return view('CrudUsers/update')->with(['users' => $users]);;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user )
    {
      
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
            'role'=>'required'
            
        ]);

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->password = $data['password_confirmation'];
        $user->updated_at = now();

        $user->save();

        return redirect('/Admi/readUsers');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
