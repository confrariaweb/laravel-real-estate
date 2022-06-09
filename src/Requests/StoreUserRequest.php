<?php

namespace ConfrariaWeb\RealEstate\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreUserRequest extends FormRequest
{

    public function authorize()
    {
        return Auth::user()->hasPermission('dashboard.users.create');
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'unique:App\Models\User,email',
            //'password' => 'required|confirmed|min:6',
            'roles' => 'required',
        ];
    }

    public function messages()
    {
        return config('cw_user.request.messages') ?? [];
    }
}
