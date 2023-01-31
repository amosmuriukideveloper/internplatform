<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use League\Fractal\TransformerAbstract;

class CreateInternshipsRequest extends FormRequest
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