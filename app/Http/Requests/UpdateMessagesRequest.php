<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use League\Fractal\TransformerAbstract;

class UpdateMessagesRequest extends FormRequest
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
            'sender_id' => 'required|integer',
            'receiver_id' => 'required|integer',
            'message' => 'required|string',
            'is_read' => 'nullable|boolean',
        ];
    }
}

class UpdateMessagesRequestTransformer extends TransformerAbstract
{
    /**
     * Transform the UpdateMessagesRequest instance.
     *
     * @param UpdateMessagesRequest $request
     * @return array
     */
    public function transform(UpdateMessagesRequest $request)
    {
        return [
            'sender_id' => (int) $request->input('sender_id'),
            'receiver_id' => (int) $request->input('receiver_id'),
            'message' => $request->input('message'),
            'is_read' => (bool) $request->input('is_read'),
        ];
    }
}

