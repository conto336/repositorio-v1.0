<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::user()->id === 1 && Auth::user()->role === "ADMIN") {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => ['required', 'string', 'max:30'],
            'lastname' => ['required', 'string', 'max:30'],
            'carrer' => ['required', 'string', 'max:30'],
            'carnet' => ['required', 'numeric', 'min:8', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'role'=> ['required', 'string'],
            'password' => ['required', 'string', 'max:30'],
            'password_confirmation' => ['required', 'string', 'max:30'],
        ];
        return $rules;
    }
}
