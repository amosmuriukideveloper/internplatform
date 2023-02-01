<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Http\Requests\CreateInternshipsRequest;

class CreateInternshipsRequestTransformer extends TransformerAbstract
{
    /**
     * Transform the CreateInternshipsRequest into an array
     * 
     * @param CreateInternshipsRequest $request
     * @return array
     */
    public function transform(CreateInternshipsRequest $request)
    {
        return [
            'title' => $request->title,
            'description' => $request->description,
            'business_id' => $request->business_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'stipend' => $request->stipend,
            'is_active' => $request->is_active
        ];
    }
}

