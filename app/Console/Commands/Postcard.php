<?php namespace Bakesale\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

use Bakesale\Services\Holidays;

class Postcard extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'app:postcard';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Send seasons greetings to app users';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$holiday = Holidays::getHoliday();

		// send greeting email

		$this->info('happy '.$holiday.' our dear customers'); // temporary
	}
	
}
