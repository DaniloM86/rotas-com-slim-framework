<?php

namespace App\Views;
/**
    * @method responsável por realizar a intermediação entre as views.html e as controllers
    * verifica a existência das páginas .html
    * recebe as variaveis em forma de chaves {{}} das páginas views  ['public/views/pages/'.html]
    * renderiza e retorna para o controller
**/
class Views{
    // método que verifica a existência das páginas html
    private static function getContentView($views)
    {
        $file = __DIR__.'/../../public/views/'.$views.'.html';
            return file_exists($file) ? file_get_contents($file) : '';
    }
    // método responsável por receber e alterar os valores das chaves
    public static function render($views,$vars = [])
    {
        $contentView  = self::getContentView($views);
            $key = array_keys($vars);
                $key = array_map(function($items){
                    return '{{'.$items.'}}';
        },$key);
            return str_replace($key,array_values($vars),$contentView);
    }
}
