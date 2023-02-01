<?php
namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class CreateStudentTransformer extends TransformerAbstract
{
    /**
     * Transform a Student model.
     *
     * @param CreateStudentsRequest $student
     * @return array
     */
    public function transform(CreateStudentsRequest $student)
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

