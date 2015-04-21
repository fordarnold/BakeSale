<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder {

    public function run()
    {
    	$array = array(
    		[
	        	'name' => 'the entry experience',
	        	'description' => '',
	        	'enabled' => true
    		],
    		[
	        	'name' => 'queue management',
	        	'description' => '',
	        	'enabled' => false
    		],
    		[
	        	'name' => 'products for sale',
	        	'description' => '',
	        	'enabled' => true
    		],
    		[
	        	'name' => 'services for sale',
	        	'description' => '',
	        	'enabled' => false
    		],
    		[
	        	'name' => 'menus',
	        	'description' => '',
	        	'enabled' => true
    		],
    		[
	        	'name' => 'tags',
	        	'description' => '',
	        	'enabled' => true
    		],
    		[
	        	'name' => 'backroom',
	        	'description' => 'The administrator behind-the-scenes area',
	        	'enabled' => true
    		],
    		[
	        	'name' => 'table service',
	        	'description' => 'Premium service for bigger premises',
	        	'enabled' => false
    		],
    		[
	        	'name' => 'the exit experience',
	        	'description' => '',
	        	'enabled' => true
    		],
    		[
	        	'name' => 'postcards',
	        	'description' => 'Seasons greetings sent to customer email',
	        	'enabled' => true
    		]
    	);

        Module::forceCreate($array);
    }

}