<?php

namespace App\Http\Middleware;

use Closure;

class UserManagementAuthorization
{
    public function handle($request, Closure $next)
    {
        $test = 'QnVzY2FyIGNlcnRhcyBjb25maWd1cmHDp8O1ZXMgYXBhcnRpciBkZSB1bSB0b2tlbiBkbyB1c3VhcmlvX2lkZWFsX2FwaQ==';

        $authorization = $request->header('Authorization');
        /* TODO: 
        Buscar certas configurações apartir de um token do usuario_ideal_api 
        Retornar id do usuario e salvar em Config::set('id_user', $data->id_user);
        */
        if($authorization == $test){
            return $next($request);
        }
        
        return response(['status'=> 'error', 'message'=>'Unauthorized.'], 401);
        
    }
}
