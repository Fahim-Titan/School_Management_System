<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UploadLecturesRequest extends Request
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
            //
            't_id' => 'required',
            'c_id' => 'required',
            'sub_id' => 'required',
//            'file' => 'required'
        ];
    }
}
