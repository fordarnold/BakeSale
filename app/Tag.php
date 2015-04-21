<?php namespace Bakesale;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

	protected $table = "tags";

	protected $perPage = 20;

	protected $fillable = array('name', 'description');

	/**
	 * Relationships
	 */
	public function products()
	{
		$this->belongsToMany('Product');
	}
}
