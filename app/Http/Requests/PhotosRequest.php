<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

       /* return [

            'filename' => 'required | mimes:jpeg,jpg,png ',
            //
        ];*/

      $photos = count($this->input('files'));
        foreach(range(0, $photos) as $index) {
            $rules['files.' . $index] = 'required | mimes:jpeg,jpg,png ';
        }

        return $rules;
    }
}
