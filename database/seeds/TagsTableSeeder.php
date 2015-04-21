<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder {

    public function run()
    {
        Tag::create([
        	'name' => 'marble cake'
        ]);
        Tag::create([
        	'name' => 'sandwich'
        ]);
        Tag::create([
        	'name' => 'salami'
        ]);
        Tag::create([
        	'name' => 'espresso'
        ]);
        Tag::create([
        	'name' => 'coffee'
        ]);
        Tag::create([
        	'name' => 'strong'
        ]);
    }

}