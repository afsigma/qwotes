<?php namespace qwotes\Http\Controllers;

use qwotes\Http\Requests;
use qwotes\Http\Controllers\Controller;

use Request;
use Auth;
use qwotes\User;
use qwotes\Setting;
use Illuminate\Support\Facades\Redirect;

class SettingController extends Controller {



	public function __construct()
	{
		$this->middleware('auth');
	}



	public function index()
	{
		Setting::firstOrCreate(array('user_id' => Auth::user()->id));

		$settings = Setting::where('user_id', Auth::user()->id)->first();

		return view('settings.index')->with('settings', $settings);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$setting = Setting::where('user_id', Auth::user()->id)->where('id', $id)->first();

        $setting->user_id = Auth::user()->id;
		$setting->subscribe_to_public_qwotes = Request::input('subscribe_to_public_qwotes');
		$setting->subscribe_to_my_qwotes = Request::input('subscribe_to_my_qwotes');
		$setting->type = Request::input('type');
		$setting->save();

		return Redirect::route('settings');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
