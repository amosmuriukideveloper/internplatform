<?php

namespace App\Http\Requests;

use App\Models\Students;
use Illuminate\Foundation\Http\FormRequest;
use League\Fractal\TransformerAbstract;

class UpdateStudentsRequest extends FormRequest
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

class UpdateStudentsTransformer extends TransformerAbstract
{
    /**
     * Transform a Student model.
     *
     * @param UpdateStudentsRequest $student
     * @return array
     */
    public function transform(UpdateStudentsRequest $student)
    {
        return [
            'id' => $student->id,
            'name' => $student->name,
            'email' => $student->email,
            'password' => $student->password,
            'school' => $student->school,
            'major' => $student->major,
            'gpa' => $student->gpa,
            'resume' => $student->resume,
            'is_active' => $student->is_active,
        ];
    }
}



