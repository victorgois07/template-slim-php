<?php

    namespace App\Action\Admin;

    use App\Action\Action;

    final class LoginAction extends Action{

        public function index($request, $response){

            if (isset($_SESSION[PREFIX . 'logado'])){
                return $response->withRedirect(PATH . "/admin");
            }

            return $this->view->render($response, 'admin/login/login.phtml');
        }

        public function logar($request, $response){
            $data = $request->getParsedBody();
            
            $email = strip_tags(filter_var($data['email'], FILTER_SANITIZE_STRING));
            $senha = strip_tags(filter_var($data['senha'], FILTER_SANITIZE_STRING));
            
            if ($email != '' && $senha != ''){

                $sql = "SELECT db_integrante.`MATRICULA`, db_usuario.`PASSWORD` FROM `db_usuario` INNER JOIN `db_integrante` ON db_usuario.`FK_INTEGRANTE` = db_integrante.`ID_INTEGRANTE` WHERE db_integrante.`MATRICULA` = ? AND db_usuario.`PASSWORD` = ?;";

                $verificarNoBanco = $this->db->prepare($sql);

                $verificarNoBanco->execute(array($email,md5($senha)));

                if ($verificarNoBanco->rowCount() > 0){
                    $_SESSION[PREFIX . 'logado'] = true;

                    return $response->withRedirect(PATH."/admin");
                }else{
                    $vars['erro'] = "Você não foi encontrado no sistema.";

                    return $this->view->render($response, 'admin/login/login.phtml',$vars);
                }
                
                
            }else{
                $vars['erro'] = "Preencha todos os campos.";
                return $this->view->render($response, 'admin/login/login.phtml');
            }

            
        }

        public function logout($request, $response){

            unset($_SESSION[PREFIX.'logado']);
            session_destroy();

            return $response->withRedirect(PATH.'/admin/login');
        }
    }

?>