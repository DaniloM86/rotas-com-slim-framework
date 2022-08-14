<?php

namespace App\Controller\Pages;
use App\Views\Views;
/**
    * @method controller
    * define as configurações de controle da página update-contact
    * class [filho] extends [master]
**/
class UpdateContact extends Master{
    public static function UpdateContact()
    {
        // renderiza a view update-contact recebe os valores de forma static
        $content = Views::render('pages/edits/update-contact',[
            'id' => 2,
                'nome' => 'nome qualquer aqui',
                    'email' => 'email@emailcom',
                        'telefone' => '0000000000000',
                            'sexo' => 'f',
                                'data_nasc' => '00/00/0000'
        ]);
            return parent::MasterPage('update new contact > page',$content);
    }
}
