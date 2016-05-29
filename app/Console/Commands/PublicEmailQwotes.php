<?php namespace qwotes\Console\Commands;

use Illuminate\Console\Command;
use qwotes\Commands\LEmailQwotes;
use Illuminate\Foundation\Bus\DispatchesCommands;
use qwotes\User;
use Mail;
use qwotes\Setting;
use qwotes\Qwote;

class PublicEmailQwotes extends Command {

 
	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'PublicEmailQwotes';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Get daily public email qwotes';

	

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */

    
    public function fire()
	{
        $qwotes = Qwote::all()->where('public', 1)->where('vetted', 1)->random();
           //echo $user->User->email;

	    $users = Setting::with('user')->where('subscribe_to_public_qwotes', 1)->get();
        //$user = User::findOrFail(1);

        foreach ($users as $user) {
            
            

            Mail::queue('emails.qwote', ['qwotes' => $qwotes->qwote, 'author' => $qwotes->author ], function ($m) use ($user) {

            $m->to($user->User->email, $user->User->name)->subject('Daily Inspirational Qwotes')->from('daily@qwotes.net');

             });
         

         }

       

       
    
	}
	

}
