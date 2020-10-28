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
            'first_name'       => 'required|max:255',
            'last_name'        => 'required|max:255',
            'email'            => 'required|unique:players|email|max:255',
            'dob'              => 'required|date_format:d/m/Y|before:today',
            'mobile'           => 'required',
            'nationality'      => 'required',
            'living_in'        => 'required',
            'visa_status'      => 'required',
            'playing_with'     =>'required',
            'files'            => 'nullable|mimes:jpg,jpeg,png',
            'photo'            => 'required',
            'message'          => 'required',
            'passport_page'    => 'nullable|mimes:jpg,jpeg,png,pdf',
            'emirates_id_front'=> 'nullable|mimes:jpg,jpeg,png,pdf',
            'emirates_id_back' => 'nullable|mimes:jpg,jpeg,png,pdf',
            'visa_page'        => 'nullable|mimes:jpg,jpeg,png,pdf',
            'passport_expiry'  => 'required|date_format:d/m/Y|after:today',
        ];
    }
}
