<?php namespace qwotes\Http\Controllers;

use qwotes\Http\Requests;
use qwotes\Http\Controllers\Controller;
use qwotes\Qwote;
use Illuminate\Support\Facades\Redirect;
use Request;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


    public function __construct()
	{
		$this->middleware('auth');

		$this->middleware('role');
	}


	public function index()
	{
		$qwotes = Qwote::orderBy('created_at', 'DESC')->paginate(10);

		return view('admin.index')->with('qwotes', $qwotes);
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
		$qwotes = Qwote::where('id', $id)->get();
		
		return view('admin.edit')->with('qwotes', $qwotes);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Requests\QwotesRequest $request)
	{
		$qwote = Qwote::where('id', $id)->first();

       
		$qwote->qwote = $request->input('qwote');
		$qwote->author = $request->input('author');
		$qwote->type = $request->input('type');
		$qwote->vetted = $request->input('vetted');
        $qwote->public = $request->input('public');

		$qwote->save();

		return Redirect::route('admin');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function qwick_update($id)
	{
		$qwote = Qwote::where('id', $id)->first();

      
		$qwote->vetted = Request::input('vetted');
        $qwote->public = Request::input('public');

		$qwote->save();

		return Redirect::route('admin');
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
