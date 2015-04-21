<?php namespace Bakesale\Http\Controllers\Webstore;

use Bakesale\Http\Requests;
use Bakesale\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Bakesale\Tag;

class TagsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('webstore.tags.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return view('webstore.tags.show');
	}

	/**
	 * Suggest some new tags.
	 *
	 * @return Response
	 */
	public function suggest(Request $request)
	{
		if($request->method() == 'GET')
			return view('webstore.tags.suggest');

		if($request->method() == 'POST') {

			$tag = new Tag;

			$tag->name = $request->get('name');

			$request->has('description') ? $tag->description = $request->get('description') : 'do nothing';

			$tag->save();
		}
	}

}
