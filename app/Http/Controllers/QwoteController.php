<?php namespace qwotes\Http\Controllers;

use qwotes\Http\Requests;
use qwotes\Http\Controllers\Controller;
use qwotes\Qwote;
use Illuminate\Support\Facades\Redirect;
use Auth;


use Request;

class QwoteController extends Controller {



	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $qwote = Qwote::all();

		return view('qwotes.new');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		

		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\QwotesRequest $request)
	{
		$qwote = new Qwote;


        $qwote->user_id = Auth::user()->id;
		$qwote->qwote = Request::input('qwote');
		$qwote->author = Request::input('author');
		$qwote->type = Request::input('type');
        $qwote->public = Request::input('public');
		$qwote->save();

		return Redirect::route('home');
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
		$qwotes = Qwote::where('user_id', Auth::user()->id)->where('id', $id)->get();
		
		return view('qwotes.edit')->with('qwotes', $qwotes);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$qwote = Qwote::where('user_id', Auth::user()->id)->where('id', $id)->first();


        $qwote->user_id = Auth::user()->id;
		$qwote->qwote = Request::input('qwote');
		$qwote->author = Request::input('author');
		$qwote->type = Request::input('type');
        $qwote->public = Request::input('public');
		$qwote->save();

		return Redirect::route('home');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$qwote = Qwote::where('user_id', Auth::user()->id)->where('id', $id)->first();

		$qwote->delete();

		return Redirect::route('home');
	}

}
