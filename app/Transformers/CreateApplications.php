<?php
namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class CreateApplicationsTransformer extends TransformerAbstract
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

