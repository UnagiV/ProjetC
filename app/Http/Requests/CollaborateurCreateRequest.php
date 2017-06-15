<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CollaborateurCreateRequest extends FormRequest
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
        return [
          'Collaborateur_TCa' => 'required|max:255',
          'Date_In_TCa' => 'required|max:255',
          'Date_Out_TCa' => 'required|max:255',
          'Acces_TCa' => 'required|max:255',
          'Responsable_TCa' => 'required|max:255',
          'TR_TCa' => 'required|max:255'

        ];
    }
}
