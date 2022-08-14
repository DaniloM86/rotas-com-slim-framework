<?php

namespace App\Controller\Pages;
use App\Views\Views;
/** @method controller [Task Page]
* define as configurações de controle da página de tarefas
* class [filho] extends [master]
**/
class Task extends Master{
    public static function getTask()
    {
        $content = Views::render('pages/task',[

        ]);
            return parent::MasterPage('task > page',$content);
    }
}
