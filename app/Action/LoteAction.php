<?php

namespace app\Action;

final class LoteAction extends Action{
    
    public function lote_create($request, $response){

        $vars['page'] = "home";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function lote_delete($request, $response){

        $vars['page'] = "sobre";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function lote_read($request, $response){

        $vars['page'] = "contato";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function lote_update($request, $response){

        $vars['page'] = "home";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function lote_post_ocorrencia($request, $response){

        $vars['page'] = "sobre";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function lote_post_update($request, $response){

        $vars['page'] = "contato";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function lote_post_read($request, $response){

        $vars['page'] = "contato";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function lote_post_delete($request, $response){

        $vars['page'] = "contato";

        return $this->view->render($response, 'template.phtml', $vars);
    }
    
}

?>