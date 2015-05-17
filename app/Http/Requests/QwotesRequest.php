<?php namespace qwotes\Http\Requests;

use qwotes\Http\Requests\Request;

class QwotesRequest extends Request {

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

			'qwote' => 'required|min:3|max:600',
			'author' => 'required|min:3|max:100'
		];
	}

}
