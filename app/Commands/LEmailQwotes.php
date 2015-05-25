<?php namespace qwotes\Commands;

use qwotes\Commands\Command;

use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldBeQueued;

class LEmailQwotes extends Command implements SelfHandling, ShouldBeQueued {

	use InteractsWithQueue, SerializesModels;

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'LEmailQwotes';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Testing EmailQwotes';

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Execute the command.
	 *
	 * @return void
	 */
	public function handle()
	{
		var_dump('test');
	}

}
