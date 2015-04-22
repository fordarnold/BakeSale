<?php namespace Bakesale\Http\Controllers\Backroom;

use Bakesale\Http\Requests;
use Bakesale\Http\Controllers\BackroomController;

use Illuminate\Http\Request;

use Bakesale\Category;

class CategoriesController extends BackroomController {

	/**
	 * Show a listing of all resources.
	 *
	 * @return View
	 */
	public function index()
	{
		$categories = Category::all();

		$data = array( 'categories' => $categories );

		return view('backroom.categories.index', $data);
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
	 * @return View
	 */
	public function store(Request $request)
	{
		$category = new Category;

		$category->name = $request->get('name');
		$category->description = $request->get('description');

		$category->save();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return View
	 */
	public function show($id)
	{
		// call Api\CategoriesController->show($id)
		
		return view('backroom.categories.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return View
	 */
	public function edit($id)
	{
		$category = Category::find($id);

		$data = array( 'category' => $category );

		return view('backroom.categories.edit', $data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// call Api\CategoriesController->update($id)
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// call Api\CategoriesController->destroy($id)
	}

}
