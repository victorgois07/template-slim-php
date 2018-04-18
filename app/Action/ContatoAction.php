<?php
/**
 * Created by PhpStorm.
 * User: p742651
 * Date: 18/04/2018
 * Time: 08:47
 */

namespace App\Action;


class ContatoAction extends Action{

    public function contato_create($request, $response){

        $vars['page'] = "home";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function contato_delete($request, $response){

        $vars['page'] = "sobre";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function contato_read($request, $response){

        $vars['page'] = "contato";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function contato_update($request, $response){

        $vars['page'] = "home";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function contato_post_ocorrencia($request, $response){

        $vars['page'] = "sobre";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function contato_post_update($request, $response){

        $vars['page'] = "contato";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function contato_post_read($request, $response){

        $vars['page'] = "contato";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function contato_post_delete($request, $response){

        $vars['page'] = "contato";

        return $this->view->render($response, 'template.phtml', $vars);
    }

}

?>