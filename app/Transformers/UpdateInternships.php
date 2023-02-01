<?php
namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Http\Requests\UpdateInternshipsRequest;

class UpdateInternshipsRequestTransformer extends TransformerAbstract
{
    /**
     * Transform the UpdateInternshipsRequest into an array
     * 
     * @param UpdateInternshipsRequest $request
     * @return array
     */
    public function transform(UpdateInternshipsRequest $request)
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

