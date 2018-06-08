<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class UpdatePostRequest extends CreatePostRequest
{
    public function authorize()
    {
        return true;
    }
}