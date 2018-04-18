<?php
/**
 * Created by PhpStorm.
 * User: p742651
 * Date: 18/04/2018
 * Time: 08:51
 */

namespace app\Action;


final class PainelAction extends Action{
    public function console_painel($request, $response){

        $vars['page'] = "home";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function painel_acompanhamento($request, $response){

        $vars['page'] = "sobre";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function painel_quantitativo($request, $response){

        $vars['page'] = "contato";

        return $this->view->render($response, 'template.phtml', $vars);
    }
}

?>