<?php namespace Bakesale;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $table = "tags";

	protected $perPage = 20;

	protected $fillable = array(
		'category_id', 'name', 'vendor', 'description', 'photo',
		'unit_cost', 'unit_price', 'currency_id', 'min_stock'
	);

	/**
	 * Relationships
	 */
	public function tags()
	{
		$this->belongsToMany('Tag');
	}

	public function menus()
	{
		$this->belongsToMany('Menu');
	}

}
