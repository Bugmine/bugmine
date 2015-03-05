<?php namespace Bugmine\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class CheckAdministrator {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if(Auth::user()->group->name !== "Administrator"){
			return Response::view('errors.403', [], 403);
		}
		return $next($request);
	}

}
