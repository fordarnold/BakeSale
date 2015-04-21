<?php namespace Bakesale\Core\Tag;

use Bakesale\Tag;

class Suggested {

	// public function _construct() 
	// {
	// 	$this->middleware('auth.backroom');
	// }

	/**
	 * Approve a suggested tag
	 * 
	 * @param  integer $id Tag id
	 * @return boolean     true/false
	 */
	public function approve($id)
	{
		return array(Tag::isApproved(1), Tag::isApproved('tag name'));
	}

	/**
	 * Approve all suggested tags
	 * 
	 * @return mixed
	 */
	public function approveAll()
	{

	}
}
