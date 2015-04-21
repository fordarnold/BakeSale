<?php namespace Bakesale\Http\Controllers\Backroom;

use Bakesale\Http\Requests;
use Bakesale\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Bakesale\Category;

class CategoriesController extends Controller {

	/**
	 * Show a listing of all categories.
	 *
	 * @return View
	 */
	public function index()
	{
		return Category::all();
		// return view('backroom.categories.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return View
	 */
	public function create()
	{
		return view('backroom.categories.create');
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
		return view('backroom.categories.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('backroom.categories.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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

	/**
	 * Suggest a new category.
	 *
	 * @return mixed
	 */
	public function suggest()
	{
		return view('backroom.categories.suggest');
	}

}
