<?php
/**
 * Created by PhpStorm.
 * User: lubasha
 * Date: 10.06.2018
 * Time: 15:45
 */

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
use App\Role;


class AdminMiddleware
{

    public function handle($request, Closure $next)
    {
        if (\Illuminate\Support\Facades\Auth::id() == 1){
            return $next($request);

        }

        return redirect('access_denied');
    }
}