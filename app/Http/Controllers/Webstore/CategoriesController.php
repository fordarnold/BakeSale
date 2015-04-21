<?php namespace Bakesale\Http\Controllers\Webstore;

use Bakesale\Http\Requests;
use Bakesale\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CategoriesController extends Controller {

	/**
	 * Show a listing of all categories.
	 *
	 * @return View
	 */
	public function index()
	{
		return view('webstore.categories.index');
	}

	/**
	 * Show a single category.
	 *
	 * @param  int  $id
	 * @return View
	 */
	public function show($id)
	{
		return view('webstore.categories.show');
	}

	/**
	 * Suggest a new category.
	 *
	 * @return mixed
	 */
	public function suggest()
	{
		return view('webstore.categories.suggest');
	}

}
