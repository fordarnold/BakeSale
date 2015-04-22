<?php namespace Bakesale;

use Illuminate\Database\Eloquent\Model;

class Module extends Model {

	protected $table = "modules";

	protected $perPage = 20;

	protected $fillable = array('name', 'description', 'enabled');

}
