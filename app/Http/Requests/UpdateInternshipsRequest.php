<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use League\Fractal\TransformerAbstract;

class UpdateInternshipsRequest extends FormRequest
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
            
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'business_id' => 'required|integer|exists:businesses,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'stipend' => 'nullable|string',
            'is_active' => 'nullable|boolean',
           
        ];
    }
}

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


