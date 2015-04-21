<?php namespace Bakesale\Http\Controllers\Api;

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
		return Tag::all();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$tag = new Tag;

		$tag->name = $request->get('name');

		$request->has('description') ? $tag->description = $request->get('description') : 'do nothing';

		$tag->save();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Tag::find($id);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$tag = Tag::find($id);

		$request->has('name') ? $tag->name = $request->get('name') : 'do nothing';
		$request->has('description') ? $tag->description = $request->get('description') : 'do nothing';

		$tag->save();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$tag = Tag::find($id);

		return $tag->destroy();
	}

}
