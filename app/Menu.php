<?php namespace Bakesale;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {

	protected $table = "menus";

	protected $perPage = 20;

	protected $fillable = array('name', 'description', 'photo', 'template_id');

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
		return $this->belongsToMany('Product');
	}

	/**
	 * Support functions
	 */

	public function __construct()
	{
		parent::__construct();

		// may need this one soon
		if(is_null($this->photo))
		{
			$this->photo = 'http://photos.com/default-menu-photo.svg';
		}
	}

}
