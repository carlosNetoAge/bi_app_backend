<?php

namespace App\Http\Middleware;

use App\Models\AuthToken;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class VerifyToken
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
        if($request->header('authorization')){

            $token = User::where('personal_token', $request->header('authorization'))->first();

            if(isset($token->email)) {

                return $next($request);

            } else {

                return response('usuário inválido');

            }

        } else {

            if($request->header('authorizationapp')){

                $tokenApp = AuthToken::where('_token', $request->header('authorizationapp'))->first();

                if($tokenApp->user) {

                    return $next($request);

                } else {

                    return response([
                        'mensagem' => 'token inválido'
                    ]);

                }

            } else {

                return response([
                    'mensagem' => 'token inválido'
                ]);

            }

        }
    }
}
