<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckBalance extends FormRequest
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
			'address' => 'required|string|regex:/^[a-z0-9\/+]{32}$/siu|not_in:AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA',
		];
	}
}
