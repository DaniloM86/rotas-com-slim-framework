<?php

namespace App\Controller\Pages;
use App\Views\Views;
/** @method controller [Task Page]
    * define as configurações de controle da página de tarefas
    * class [filho] extends [master]
**/
class Event extends Master{
    public static function getEvent()
    {
        // renderiza a view da página task.html
        $content = Views::render('pages/event',[

        ]);
            return parent::MasterPage('event > page',$content);
    }
}
