<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use League\Fractal\TransformerAbstract;

class CreateApplicationsRequest extends FormRequest
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
            'student_id' => 'required|exists:students,id',
            'internship_id' => 'required|exists:internships,id',
            'cover_letter' => 'required|file|mimes:pdf',
            'resume' => 'required|file|mimes:pdf',
            'status' => 'required|in:pending,accepted,rejected',
        ];
    }
}

