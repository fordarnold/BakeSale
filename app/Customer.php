<?php namespace Bakesale;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

	protected $table = "customers";

	protected $perPage = 20;

	protected $fillable = array('user_id', 'first_name', 'last_name', 'company', 'bio');

	/**
	 * Relationships
	 */
	
	public function user()
	{
		$this->belongsTo('User');
	}

	public function loyalty()
	{
		$this->hasMany('Loyalty');
	}

}
