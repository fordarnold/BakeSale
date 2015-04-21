<?php namespace Bakesale;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $table = "categories";

	protected $perPage = 20;

	protected $fillable = array('name', 'description', 'approved');

	/**
	 * Relationships
	 */
	
	public function products()
	{
		$this->hasMany('Product');
	}

}
