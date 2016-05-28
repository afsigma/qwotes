<?php namespace qwotes\Http\Requests;

use qwotes\Http\Requests\Request;

class ProfileRequest extends Request {

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

			'name' => 'required|min:3|max:600',
			'email' => 'required|email|max:255|unique:users,email,'.$this->id,
		];
	}

}
