<?php
declare(strict_types = 1);

namespace App\Http\Middleware;

use App\Services\Auth\Auth;
use App\Services\Infrastructure\Response\JsonResponse;
use Illuminate\Http\Request;

class OnlyAuthorized
{
    private $auth;

    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    public function handle(Request $request, \Closure $next)
    {
        if ($this->auth->check()) {
            return $next($request);
        }

        if ($request->ajax()) {
            return response()->json(new JsonResponse('not_authorized'), 403);
        }

        return redirect()->route('frontend.auth.login.render');
    }
}
