<?php

namespace App\Http\Requests;
namespace App\Transformers;
use League\Fractal\TransformerAbstract;





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

class CreateStudentsRequestTransformer extends TransformerAbstract
{
    public function transform(CreateStudentsRequest $request)
    {
        return [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'school' => $request->input('school'),
            'major' => $request->input('major'),
            'gpa' => $request->input('gpa'),
            'resume' => $request->input('resume'),
            'is_active' => $request->input('is_active', true)
        ];
    }
}
