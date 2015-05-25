<?php namespace qwotes\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use qwotes\User;
use Mail;
use qwotes\Setting;
use qwotes\Qwote;

class PrivateEmailQwotes extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'PrivateEmailQwotes';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Get daily private email qwotes';

	
	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		//
	}

	

}
