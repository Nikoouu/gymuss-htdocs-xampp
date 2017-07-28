<?php

namespace gymuss\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LaboranteFormRequest extends FormRequest
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
            'PERS_TRAI_NOM'=>'required|max:50',
            'PERS_TRAI_APE_PAT'=>'required|max:50',
            'PERS_TRAI_APE_MAT'=>'required|max:50',

        ];
    }
}
