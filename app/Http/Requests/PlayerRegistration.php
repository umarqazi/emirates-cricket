<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlayerRegistration extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|max:255',
            'last_name'  => 'required|max:255',
            'email'      => 'required|email|max:255',
            'dob'        => 'required|date',
            'mobile'     => 'required',
            'nationality'=> 'required',
            'living_in'  => 'required',
            'visa_status'=> 'required',
            'playing_with'=>'required',
            'files'      => 'nullable|mimes:jpg,jpeg,png',
            'photo'      => 'required|mimes:jpg,jpeg,png',
            'message'    => 'required',
        ];
    }
}
