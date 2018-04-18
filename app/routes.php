<?php
    //HOME PAGINA PRINCIPAL

    $app->get('/login', 'App\Action\HomeAction:index');
    $app->post('/login', 'App\Action\HomeAction:logar');
    $app->get('/logout', 'App\Action\HomeAction:logout');

    $app->group('/',function(){
        //ROTA PÁGINA PRINCIPAL
        $this->get('', 'App\Action\HomeAction:index');

        //ROTA REGISTRO (INSERIR,EXCLUIR,VISUALIZAR e ALTERAR)
        $this->group('registrar/',function(){
            //PÁGINAS
            $this->get('{id}/inserir', 'App\Action\RegistroAction:insert_create');
            $this->get('excluir', 'App\Action\RegistroAction:insert_delete');
            $this->get('visualizar', 'App\Action\RegistroAction:insert_read');
            $this->get('alterar', 'App\Action\RegistroAction:insert_update');
            //DADOS DA PÁGINA (FORMULÁRIOS)
            $this->post('{id}/inserir', 'App\Action\RegistroAction:insert_post_ocorrencia');
            $this->post('alterar', 'App\Action\RegistroAction:insert_post_update');
            $this->post('visualizar', 'App\Action\RegistroAction:insert_post_read');
            $this->post('excluir', 'App\Action\RegistroAction:insert_post_delete');
        })->add(App\Middleware\AuthMiddleware::class);

        //PAGINA ADMINISTRATIVA
        $this->group('administrador/',function(){
            //PÁGINAS
            $this->get('', 'App\Action\AdministradorAction:console_admin');
            $this->get('inserir', 'App\Action\AdministradorAction:admin_create');
            $this->get('excluir', 'App\Action\AdministradorAction:admin_delete');
            $this->get('visualizar', 'App\Action\AdministradorAction:admin_read');
            $this->get('alterar', 'App\Action\AdministradorAction:admin_update');
            //DADOS DA PÁGINA (FORMULÁRIOS)
            $this->post('inserir', 'App\Action\AdministradorAction:admin_post_create');
            $this->post('alterar', 'App\Action\AdministradorAction:admin_post_update');
            $this->post('visualizar', 'App\Action\AdministradorAction:admin_post_read');
            $this->post('excluir', 'App\Action\AdministradorAction:admin_post_delete');
        })->add(App\Middleware\AuthMiddleware::class);

        //PAGINA CONTATOS
        $this->group('contatos/',function(){
            //PÁGINAS
            $this->get('inserir', 'App\Action\ContatoAction:contato_create');
            $this->get('excluir', 'App\Action\ContatoAction:contato_delete');
            $this->get('visualizar', 'App\Action\ContatoAction:contato_read');
            $this->get('alterar', 'App\Action\ContatoAction:contato_update');
            //DADOS DA PÁGINA (FORMULÁRIOS)
            $this->post('inserir', 'App\Action\ContatoAction:contato_post_ocorrencia');
            $this->post('alterar', 'App\Action\ContatoAction:contato_post_update');
            $this->post('visualizar', 'App\Action\ContatoAction:contato_post_read');
            $this->post('excluir', 'App\Action\ContatoAction:contato_post_delete');
        })->add(App\Middleware\AuthMiddleware::class);

        //PAGINA DOCUMENTAÇÃO
        $this->group('documentacao/',function(){
            //PÁGINAS
            $this->get('inserir', 'App\Action\DocumentacaoAction:documentacao_create');
            $this->get('excluir', 'App\Action\DocumentacaoAction:documentacao_delete');
            $this->get('visualizar', 'App\Action\DocumentacaoAction:documentacao_read');
            $this->get('alterar', 'App\Action\DocumentacaoAction:documentacao_update');
            $this->get('extrair', 'App\Action\DocumentacaoAction:documentacao_extrair');
            //DADOS DA PÁGINA (FORMULÁRIOS)
            $this->post('inserir', 'App\Action\DocumentacaoAction:documentacao_post_ocorrencia');
            $this->post('alterar', 'App\Action\DocumentacaoAction:documentacao_post_update');
            $this->post('visualizar', 'App\Action\DocumentacaoAction:documentacao_post_read');
            $this->post('excluir', 'App\Action\DocumentacaoAction:documentacao_post_delete');
            $this->post('extrair', 'App\Action\DocumentacaoAction:documentacao_post_extrair');
        })->add(App\Middleware\AuthMiddleware::class);

        //PAGINA INFORME
        $this->group('informe/',function(){
            //PÁGINAS
            $this->get('inserir', 'App\Action\InformeAction:informe_create');
            $this->get('excluir', 'App\Action\InformeAction:informe_delete');
            $this->get('visualizar', 'App\Action\InformeAction:informe_read');
            $this->get('alterar', 'App\Action\InformeAction:informe_update');
            //DADOS DA PÁGINA (FORMULÁRIOS)
            $this->post('inserir', 'App\Action\InformeAction:informe_post_ocorrencia');
            $this->post('alterar', 'App\Action\InformeAction:informe_post_update');
            $this->post('visualizar', 'App\Action\InformeAction:informe_post_read');
            $this->post('excluir', 'App\Action\InformeAction:informe_post_delete');
        })->add(App\Middleware\AuthMiddleware::class);

        //PAGINA LOTE
        $this->group('lote/',function(){
            //PÁGINAS
            $this->get('inserir', 'App\Action\LoteAction:lote_create');
            $this->get('excluir', 'App\Action\LoteAction:lote_delete');
            $this->get('visualizar', 'App\Action\LoteAction:lote_read');
            $this->get('alterar', 'App\Action\LoteAction:lote_update');
            //DADOS DA PÁGINA (FORMULÁRIOS)
            $this->post('inserir', 'App\Action\LoteAction:lote_post_ocorrencia');
            $this->post('alterar', 'App\Action\LoteAction:lote_post_update');
            $this->post('visualizar', 'App\Action\LoteAction:lote_post_read');
            $this->post('excluir', 'App\Action\LoteAction:lote_post_delete');
        })->add(App\Middleware\AuthMiddleware::class);

        //PAGINA PAINEL
        $this->group('painel/',function(){
            //PÁGINAS
            $this->get('', 'App\Action\PainelAction:console_painel');
            $this->get('acompanhamento', 'App\Action\PainelAction:painel_acompanhamento');
            $this->get('quantitativo', 'App\Action\PainelAction:painel_quantitativo');
        })->add(App\Middleware\AuthMiddleware::class);

        //PAGINA INFORME
        $this->group('relatorio/',function(){
            //PÁGINAS
            $this->get('dia', 'App\Action\RelatorioAction:relatorio_dia');
            $this->get('ano', 'App\Action\RelatorioAction:relatorio_mes');
            $this->get('mes', 'App\Action\RelatorioAction:relatorio_ano');
            //DADOS DA PÁGINA (FORMULÁRIOS)
            $this->post('dia', 'App\Action\RelatorioAction:relatorio_post_dia');
            $this->post('ano', 'App\Action\RelatorioAction:relatorio_post_mes');
            $this->post('mes', 'App\Action\RelatorioAction:relatorio_post_ano');
        })->add(App\Middleware\AuthMiddleware::class);

        //PAGINA PAINEL
        $this->group('statusReport/',function(){
            //PÁGINAS
            $this->get('', 'App\Action\StatusReportAction:console_status');
            $this->get('mes', 'App\Action\StatusReportAction:status_report_mes');
            $this->get('semana', 'App\Action\StatusReportAction:status_report_semana');
        })->add(App\Middleware\AuthMiddleware::class);

    })->add(App\Middleware\AuthMiddleware::class);

?>