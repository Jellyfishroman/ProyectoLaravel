<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;
class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required',
            'password' => 'required'
        ];
    }

    public function getCredentials()
    {
        $username = $this->get('username');
        //si el campo username fue rellenado con un correo electrónico,
        //la solicitud (y la validación) se hace en base al correo y la contraseña
        if($this->isEmail($username))
        {
            return[
                'email'=>$username, 
                'password'=>$this->get('password')
            ];
        }
        return $this->only('username', 'password');
    }

    public function isEmail($value)
    {
        //instancia de validador, es una interfaz que comunica con el módulo de 
        //validación de laravel
        $factory = $this->container->make(ValidationFactory::class); 
                //se construye una nueva regla: 
                //a username se la asigna el parámetro de la función y se compara
                //para saber si dicho valor es igual al correo electrónico del usuario
                //fails() retorna verdadero si falla la comparación
                //si fails retorna verdadero, no coinciden. ↓↓↓↓
        return !$factory->make(['username' => $value], ['username' => 'email'])->fails();
    }    
}