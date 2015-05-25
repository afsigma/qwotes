<?php namespace qwotes\Console\Commands;

use Illuminate\Console\Command;
use qwotes\Commands\LEmailQwotes;
use Illuminate\Foundation\Bus\DispatchesCommands;
use qwotes\User;
use Mail;

class EmailQwotes extends Command {

 
	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'EmailQwotes';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'EmailQwotes Test';

	

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */

    
    public function handle()
	{
	
        $user = User::findOrFail(1);

        Mail::queue('emails.reminder', ['user' => $user], function ($m) use ($user) {

            $m->to($user->email, $user->name)->subject('Your Reminder!')->from('hi@qwotes.net');

        });
    
	}
	

}
