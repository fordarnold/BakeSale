<?php namespace Bakesale;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {

	protected $table = "menus";

	protected $perPage = 20;

	protected $fillable = array('name', 'description', 'photo', 'template');

	/**
	 * Relationships
	 */
	
	public function products()
	{
		$this->belongsToMany('Product');
	}

}
