<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|string|unique:users,email',
            'password' => 'required|confirmed',
        ]);
        $user = User::query()->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        if ($user) {
            auth('web')->login($user);
            session()->flash('success', 'Вы успешно зарегистрировались');
        }
        return redirect()->route('home');


    }

    public function logout()
    {
        auth()->logout();
        session()->flash('success', 'Вы вышли из аккаунта');
        return redirect()->route('home');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (auth('web')->attempt($data)) {
            session()->flash('success', 'Вы успешно авторизировались');
            return redirect()->route('home');
        }

        return redirect()->route('login')->withErrors([
            'email' => 'пользователь не найден или данные введены неверно',
            'password' => 'неверный пароль',
            ]);
    }
}
