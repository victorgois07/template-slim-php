<?php
/**
 * Created by PhpStorm.
 * User: p742651
 * Date: 18/04/2018
 * Time: 08:47
 */

namespace app\Action;


class DocumentacaoAction extends Action{

    public function documentacao_create($request, $response){

        $vars['page'] = "home";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function documentacao_delete($request, $response){

        $vars['page'] = "sobre";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function documentacao_read($request, $response){

        $vars['page'] = "contato";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function documentacao_update($request, $response){

        $vars['page'] = "home";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function documentacao_extrair($request, $response){

        $vars['page'] = "sobre";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function documentacao_post_ocorrencia($request, $response){

        $vars['page'] = "contato";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function documentacao_post_update($request, $response){

        $vars['page'] = "contato";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function documentacao_post_read($request, $response){

        $vars['page'] = "contato";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function documentacao_post_delete($request, $response){

        $vars['page'] = "contato";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function documentacao_post_extrair($request, $response){

        $vars['page'] = "contato";

        return $this->view->render($response, 'template.phtml', $vars);
    }
    
}

?>