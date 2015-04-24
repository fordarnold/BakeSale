<?php namespace Bakesale;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $table = "products";

	protected $perPage = 20;

	protected $fillable = array(
		'category_id', 'name', 'vendor', 'description', 'photo',
		'unit_cost', 'unit_price', 'currency_id', 'min_stock'
	);

	/**
	 * Relationships
	 */
	
	public function category()
	{
		$this->belongsTo('Bakesale\Category');
	}

	// public function currency()
	// {
	// 	$this->belongsTo('Currency');
	// }

	public function tags()
	{
		$this->belongsToMany('Bakesale\Tag');
	}

	public function menus()
	{
		$this->belongsToMany('Bakesale\Menu');
	}

}
