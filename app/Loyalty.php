<?php namespace Bakesale;

use Illuminate\Database\Eloquent\Model;

class Loyalty extends Model {

	protected $table = "loyalties";

	protected $perPage = 20;

	protected $fillable = array('uid', 'points', 'category', 'customer_id');

	/**
	 * Relationships
	 */
	
	public function customer()
	{
		return $this->belongsTo('Customer');
	}

}
