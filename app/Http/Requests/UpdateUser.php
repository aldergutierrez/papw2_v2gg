<?php

namespace App\Http\Requests;



use Illuminate\Foundation\Http\FormRequest;

class UpdateUser extends FormRequest
{
   
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
            'userName' => 'required',
            'name' => 'required',
            'lastName' => 'required',
            'country' => 'required',
            'city' => 'required',
            'image' => 'required',
            'description' => 'required'
            ];
    
    }

}
