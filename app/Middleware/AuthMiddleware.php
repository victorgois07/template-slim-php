<?php

    namespace App\Middleware;

    class AuthMiddleware{
        public function __invoke($request, $response, $next){
            
            if(!isset($_SESSION[PREFIX.'logado'])){
                return $response->withRedirect(PATH . '/login');
            }
            
            $response = $next($request, $response);

            return $response;
        }
    }


?>