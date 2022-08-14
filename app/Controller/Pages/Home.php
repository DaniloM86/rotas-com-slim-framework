<?php

namespace App\Controller\Pages;
use App\Views\Views;
/**
    * @method controller [Home Page]
    * define as configurações de controle da página home
    * class [filho] extends [master]
**/
class Home extends Master{
    public static function getHome()
    {
        // renderiza a view da página home.html
        $content = Views::render('pages/home',[
            'subTitle' => 'sub titulo da página home'
        ]);
            return parent::MasterPage('home > page',$content);
    }
}
