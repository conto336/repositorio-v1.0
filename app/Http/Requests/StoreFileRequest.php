<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class StoreFileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::user()->id === 1) {
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
        // //['file' => 'required|mimetypes:application/pdf|max:40000'], ['name' => 'required', 'string', 'max:100'], ['carrer' => 'required'], ['category' => 'required']

        $rules = [
            'file' => ['required', 'mimes:pdf,doc'],
            'name' => ['required', 'string', 'max:400', 'unique:documents'],
            'carrer' => ['required'],
            'date' => ['required', 'string'],
            'category' => ['required'],
            'authors' => ['required', 'string', 'unique:electronics', 'unique:geologies', 'unique:industrials'],
            'description' => ['string', 'unique:electronics', 'unique:geologies', 'unique:industrials']
        ];
        return $rules;
    }
}
