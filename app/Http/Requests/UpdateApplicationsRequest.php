<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use League\Fractal\TransformerAbstract;

class UpdateApplicationsRequest extends FormRequest
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
            'student_id' => 'required|integer',
            'internship_id' => 'required|integer',
            'resume' => 'required|file|mimes:pdf',
            'cover_letter' => 'required|file|mimes:pdf',
            'status' => 'required|in:pending,accepted,rejected',
        ];
    }
}

class UpdateApplicationsTransformer extends TransformerAbstract
{
    /**
     * @param array<string, mixed> $data
     *
     * @return array<string, mixed>
     */
    public function transform(array $data)
    {
        return [
            'student_id' => isset($data['student_id']) ? (int) $data['student_id'] : null,
            'internship_id' => isset($data['internship_id']) ? (int) $data['internship_id'] : null,
            'cover_letter' => isset($data['cover_letter']) ? $data['cover_letter'] : null,
            'resume' => isset($data['resume']) ? $data['resume'] : null,
            'status' => isset($data['status']) ? $data['status'] : null,
        ];
    }
}
