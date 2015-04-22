<?php namespace Bakesale;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model {

	protected $table = "suppliers";

	protected $perPage = 20;

	protected $fillable = array('first_name', 'last_name', 'company', 'bio');

}
