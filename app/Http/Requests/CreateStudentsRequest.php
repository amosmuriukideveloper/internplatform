<?php

namespace App\Http\Requests;
namespace App\Transformers;






use Illuminate\Foundation\Http\FormRequest;


class CreateStudentsRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
           
            'name' => ['required'],
            'email' => ['required', 'unique:students'],
            'password' => ['required'],
            'school' => ['required'],
            'major' => ['required'],
            'gpa' => ['required'],
            'resume' => ['required'],
            'is_active' => ['default:true']
           
        ];
    }
}

