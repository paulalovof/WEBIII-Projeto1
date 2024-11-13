<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback() {
        // Obtém os dados do usuário via Google Socialite
        $socialiteUser = Socialite::driver('google')->user();

        // Tenta encontrar o usuário no banco de dados pelo e-mail
        $data = User::where('email', $socialiteUser->getEmail())->first();

        // Se o usuário não existir, cria um novo
        if (is_null($data)) {
            $data = User::create([
                'name' => $socialiteUser->getName(),
                'email' => $socialiteUser->getEmail(),
                'password' => bcrypt(Str::random(24)),
            ]);
        }

        // Realiza o login do usuário
        Auth::login($data);

        // Redireciona o usuário para a rota desejada
        return redirect()->route('turma.index');
    }
}
