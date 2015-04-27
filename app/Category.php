<?php namespace Bakesale;

use Illuminate\Database\Eloquent\Model;

/**
 * A group of similar products is a category
 */
class Category extends Model {

	protected $table = "categories";

	protected $perPage = 20;

	protected $fillable = array('name', 'description', 'approved');

	/**
	 * Relationships
	 */
	
	public function products()
	{
		return $this->hasMany('Product');
	}

}
