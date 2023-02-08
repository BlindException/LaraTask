<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
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
    public function rules(Request $request)
    {
        
        return [
//            'user_id' => [auth()->user()->id],
            'location_id' => ['required', 'integer'],
            'text' => ['required', 'string', 'max:255'],
            'due_date' => ['required', 'date'],
                        'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
