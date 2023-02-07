<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DisableBackButton
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        $response->header('Cache-Control', 'no-cache, no-store, must-revalidate');
        $response->header('Pragma', 'no-cache');
        $response->header('Expires', '0');
        $response->setContent("
        <script>
            if (typeof history.pushState === 'function') {
                history.pushState('forward', null, '');
                window.addEventListener('popstate', function () {
                    history.pushState('forward', null, '');
                });
            }
        </script>
        " . $response->content());
        return $response;
    }
}
