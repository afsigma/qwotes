<?php namespace qwotes\Http\Middleware;

use Closure;

class Roles {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$user = $request->user();

		if ($user && $user->role == 'admin')
		{
			return $next($request);
		}

		return redirect('/');
		
	}

}