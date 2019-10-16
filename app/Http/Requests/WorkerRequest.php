<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkerRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $rules = [

        ];

        switch ($this->getMethod())
        {
            case 'GET':
                break;
            case 'POST':
                break;
            case 'PUT':
                break;
            case 'PATCH':
                break;
            case 'DELETE':
                break;
            default:
            
                break;
        }

        return [
            //
        ];
    }
}
