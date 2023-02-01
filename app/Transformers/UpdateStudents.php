<?php

namespace App\Transformers;

use App\Http\Requests\UpdateStudentsRequest;
use App\Models\Student;
use League\Fractal\TransformerAbstract;

class UpdateStudentTransformer extends TransformerAbstract
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

