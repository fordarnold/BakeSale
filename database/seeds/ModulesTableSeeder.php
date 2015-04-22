<?php

use Illuminate\Database\Seeder;

use Bakesale\Module;

class ModulesTableSeeder extends Seeder {

    public function run()
    {
    	$array = array(
    		[
	        	'name' => 'the entry experience',
	        	'description' => 'welcoming a user to the app experience',
	        	'enabled' => true
    		],
    		[
	        	'name' => 'queue management',
	        	'description' => 'customer queue headaches gone :)',
	        	'enabled' => false
    		],
    		[
	        	'name' => 'products for sale',
	        	'description' => 'yikes... stock is involved',
	        	'enabled' => true
    		],
    		[
	        	'name' => 'services for sale',
	        	'description' => 'whew... no stock involved',
	        	'enabled' => false
    		],
    		[
	        	'name' => 'menus',
	        	'description' => 'organise your offerings into creative menu lists (similar to Pinterest boards)',
	        	'enabled' => true
    		],
    		[
	        	'name' => 'tags',
	        	'description' => 'used to describe the specifics about an item',
	        	'enabled' => true
    		],
    		[
	        	'name' => 'backroom',
	        	'description' => 'the administrator behind-the-scenes area',
	        	'enabled' => true
    		],
    		[
	        	'name' => 'table service',
	        	'description' => 'premium service for bigger premises',
	        	'enabled' => false
    		],
    		[
	        	'name' => 'the exit experience',
	        	'description' => '',
	        	'enabled' => true
    		],
    		[
	        	'name' => 'postcards',
	        	'description' => 'seasons greetings sent to customer email',
	        	'enabled' => true
    		],
    		[
	        	'name' => 'loyalty program',
	        	'description' => 'where do your customers loyalties lie?',
	        	'enabled' => false
    		]
    	);

        DB::table('modules')->insert($array); // i'm guessing this is how 'mass assignment' works
    }

}