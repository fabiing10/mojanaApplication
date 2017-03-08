<?php

namespace App\Http\Requests\Frontend;

use App\Http\Requests\Request;
use Illuminate\Validation\Rule;

/**
 * Class RegisterRequest.
 */
class FrontendRequest extends Request
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
    public function rules()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

}
