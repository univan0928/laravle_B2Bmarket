<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckSignupProgress
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $current_url = $request->segment(1);
        $previousStep = session('signup_step');
        $currentStep = intval(str_replace("step", "", $current_url));
        if ($currentStep > $previousStep + 1) {
            $redirect_url = "/step" . $previousStep + 1;
            return redirect($redirect_url);
        }
        // return redirect('/dashboard');
        return $next($request);
    }
}
