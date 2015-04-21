<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('SystemsTableSeeder');
		$this->call('ModulesTableSeeder');

		$this->call('UsersTableSeeder');
		
		$this->call('CategoriesTableSeeder');
		$this->call('ProductsTableSeeder');
		$this->call('TagsTableSeeder');
		$this->call('MenusTableSeeder');

		$this->call('CustomersTableSeeder');
		$this->call('SuppliersTableSeeder');

		$this->call('SalesTableSeeder');
		$this->call('PurchasesTableSeeder');
		$this->call('ReceiptsTableSeeder');

		$this->call('StocksTableSeeder');
	}

}
