<?php
use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

/** ============ CONFIG DE ERROS E INSTÂNCIA DO SLIM =========================
    * @var responsável por definir as,
    * informações de erro e,
    * criar uma nova instância do slim,
**/
    $config['displayErrorDetails'] = true;
        $app = new App(['settings' => $config]);

/**  ====================== ROTAS DE GET ===================================
    * rota GET das cincos páginas views
    * @var Controllers das páginas .[html]
    * Caminho dos arquivos public/views/pages/...
**/
    $app->get('/','App\Controller\Pages\Home:getHome');
        $app->get('/home','App\Controller\Pages\Home:getHome');
            $app->get('/contact','App\Controller\Pages\Contact:getContact');
                $app->get('/event','App\Controller\Pages\Event:getEvent');
                    $app->get('/task','App\Controller\Pages\Task:getTask');               
/**  ====================== ROTAS DE EDIÇÃO VIA [GET] =======================
    * rota GET das páginas views de edição
    * @var Controllers das páginas de edição.[html];
    * Caminho dos arquivos [public/views/pages/edits/...]
**/
    $app->get('/contact/new-contact','App\Controller\Pages\NewContact:getNewContact');
        $app->get('/contact/update-contact','App\Controller\Pages\UpdateContact:UpdateContact');
            $app->get('/contact/delete-contact','App\Controller\Pages\DeleteContact:DeleteContact');
            // método POST do formulário de novo cadastro action='../contact/new-contact/save'
                $app->post('/contact/new-contact/save','App\Controller\Pages\NewContact:save');
    // renderiza o slim
    $app->run();
