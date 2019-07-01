<?php

namespace App\Http\Middleware;

use Closure;

class checkRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

      if ($request->user() === null) {
        return response('insufficients permissions', 401);
      }
      $actions = $request->route()->getAction();
      $roles = isset($action['roles']) ? $action['roles'] : '';

      if ($request->user()->hasAnyRole($roles) || !$roles) {
          return $next($request);
      }
      return response('insufficients permissions');

    }
}
