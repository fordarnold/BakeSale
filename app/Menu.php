<?php namespace Bakesale;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {

	protected $table = "menus";

	protected $perPage = 20;

	protected $fillable = array('name', 'description', 'photo', 'template_id');

	public function __construct()
	{
		parent::__construct();

		if(is_null($this->photo))
		{
			$this->photo = 'http://photos.com/default-menu-photo.svg';
		}
	}

	/**
	 * Relationships
	 */
	
	// a menu can have a custom layout using templates
	// 
	// public function template()
	// {
	// 	$this->belongsTo('Template');
	// }

	public function products()
	{
		$this->belongsToMany('Product');
	}

	/**
	 * Support functions
	 */

}
