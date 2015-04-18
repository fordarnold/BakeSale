<?php namespace Bakesale\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

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
		$holiday = $this->getHoliday();

		$this->info('happy '.$holiday.' to our dear customers');
	}

	/**
	 * Get the public / national holiday of a specified date
	 * 
	 * @param  string $date The date input (default: today)
	 * @return string       The holiday on date provided
	 */
	public function getHoliday($date='')
	{
		return 'new year';
	}
}
