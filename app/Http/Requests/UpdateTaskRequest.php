<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
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
            //'user_id' => auth()->user()->id,
            //'location_id' => ['required', 'integer'],
            //'text' => ['required', 'string', 'max:255'],
            //'due_date' => ['required', 'date'],
            'is_complete' => ['boolean'],
            //'date_completed' => now(),
                        'updated_at' => now(),
        ];
    }
}
