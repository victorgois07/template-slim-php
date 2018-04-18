<?php

namespace app\Action;

final class RelatorioAction extends Action{
    public function relatorio_dia($request, $response){

        $vars['page'] = "home";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function relatorio_mes($request, $response){

        $vars['page'] = "sobre";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function relatorio_ano($request, $response){

        $vars['page'] = "contato";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function relatorio_post_dia($request, $response){

        $vars['page'] = "home";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function relatorio_post_mes($request, $response){

        $vars['page'] = "sobre";

        return $this->view->render($response, 'template.phtml', $vars);
    }

    public function relatorio_post_ano($request, $response){

        $vars['page'] = "contato";

        return $this->view->render($response, 'template.phtml', $vars);
    }
}

?>