<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function create()
    {
        return view('regist.register');
    }

    public function store(UserRequest $request)
    {
        /** フォームリクエストクラスに移行 */
        //$request->validate([
        //    'name' => 'required|string|max:16',
        //    'email' => 'required|string|email|max:255|unique:users',
        //    'password' => 'required|string|confirmed|min:8|max:16',
        //]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return view('regist.complete', compact('user'));
    }
}