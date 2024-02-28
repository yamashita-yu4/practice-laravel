<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        //echo 'ログインユーザーのID：'.$user->id; //デバッグ用

        return view('auth.change')->with('user',$user);
    }

    public function update(User $user, UserUpdateRequest $request)
    {
        $id = Auth::id();
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        session()->flash('message','編集しました。');

        return view('auth.change',compact('user'));
    }
}
