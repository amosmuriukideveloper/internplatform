<?php

namespace App\Http\Requests;
namespace App\Transformers;
use League\Fractal\TransformerAbstract;

use Illuminate\Foundation\Http\FormRequest;

class CreateMessagesRequest extends FormRequest
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

class CreateMessagesRequestTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @param CreateMessagesRequest $request
     * @return array<string, mixed>
     */
    public function transform(CreateMessagesRequest $request)
    {
        return [
            'sender_id' => (int) $request->sender_id,
            'receiver_id' => (int) $request->receiver_id,
            'message' => $request->message,
            'is_read' => (bool) $request->is_read,
        ];
    }
}


