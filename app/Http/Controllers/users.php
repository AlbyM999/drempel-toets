<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\User;

class users extends Controller
{
    public function index(){
        $UserData = User::orderBy('id')
        ->get()
        ->toArray();

    return response()->json($UserData);
    }
    public function show($id){
        $userData = User::where('id',$id)
            ->get()
            ->toArray();
        return response()->json($userData);
    }
    public function store(Request $request)
    {
        $pwdHash = sha1($request->password);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$pwdHash
        ]);

    }
    public function update(Request $request,$id){
        $pwdHash = sha1($request->password);

        User::where('id',$id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$pwdHash
        ]);
    }
    public function delete(User $id){
        $id->delete();
    }
    public function login($email,$pwd){
        $userData=User::where('email',$email)
        ->where('password',$pwd)
        ->get()
        ->toArray();

        return response()->json($userData);
    }
}
