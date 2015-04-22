<?php namespace Bakesale;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

	protected $table = "tags";

	protected $perPage = 20;

	protected $fillable = array('name', 'description', 'approved');

	/**
	 * Relationships
	 */
	
	public function products()
	{
		$this->belongsToMany('Product');
	}

	/**
	 * Support functions
	 */
	
	// public static function isApproved($id = 0)
	// {
	// 	return $this->where('id', $id)->get(['approved']);
	// }

	// public static function isApproved($tag_name = '')
	// {
	// 	return $this->where('name', $tag_name)->get(['approved']);
	// }
}
