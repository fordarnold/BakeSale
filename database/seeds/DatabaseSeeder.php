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

		// $this->call('TiersTableSeeder'); // many 2 many relationship with Modules
		$this->call('ModulesTableSeeder');

		$this->call('UsersTableSeeder');
		
		$this->call('CategoriesTableSeeder');
		$this->call('ProductsTableSeeder');
		$this->call('TagsTableSeeder');
		$this->call('MenusTableSeeder');

		$this->call('CustomersTableSeeder');
		$this->call('SuppliersTableSeeder');
		
		$this->call('LoyaltiesTableSeeder');

		// $this->call('SalesTableSeeder');
		// $this->call('PurchasesTableSeeder');
		// $this->call('ReceiptsTableSeeder');

		// $this->call('StocksTableSeeder');
		
		// $this->call('ProductTagTableSeeder');
		// $this->call('MenuProductTableSeeder');
		
		// success message
		$this->command->comment('>>> Seeding Completed Successfully <<<');
	}

}
