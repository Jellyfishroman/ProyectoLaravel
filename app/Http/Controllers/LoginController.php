<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth; //para métodos de autenticación
use Illuminate\Http\Request;



class LoginController extends Controller
{
    public function show()
    {
        if(Auth::check()) //retorna a home si ya se ha iniciado sesión
        {
            return redirect('/home');
        }

        return view('auth.login');
    } 

    public function login(LoginRequest $request)
    {
        //obtención de credenciales
        $credentials = $request->getCredentials(); 

        //validación, haciendo uso de Auth
        //retorna a login si la validación es incorrecta
        if(!Auth::validate($credentials))
        {
            return redirect()->to('/login')->withErrors('auth.failed');
        }
        //login con las credenciales obtenidas
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);

        return $this->authenticated($request, $user); 

    }

    public function authenticated(Request $request, $user)
    {
        return redirect('/home');
    }

}
