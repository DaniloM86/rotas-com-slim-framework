<?php

namespace App\Controller\pages;
use App\Views\Views;
/**
    * @method controller [Master Page]
    * define as configurações de controle da página master
    * recebe e renderiza o {{header}}  {{content}} e o {{footer}}
    * class [PAI] responsável por gerenciar outras controllers
**/
class Master{
    // método responsável por renderizar o header.html {{header}}
    private static function getHeader()
    {
        return Views::render('pages/include/header');
    }
    // método responsável por renderizar o footer.html {{footer}} 
    private static function getFooter()
    {
        return Views::render('pages/include/footer');
    }
    // método responsável por renderizar os valores dinâmicamente
    public function MasterPage($title,$content)
    {
        $content = Views::render('pages/master',[
            'title' => $title,
                'header' => self::getHeader(),
                    'content' => $content,
                        'footer' => self::getFooter()
        ]);
            return $content;
    }
}
