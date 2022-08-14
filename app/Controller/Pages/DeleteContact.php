<?php

namespace App\Controller\Pages;
use App\Views\Views;
/**
    *@method controller
    * define as configurações de controle da página de delete
    * class [filho] extends [master]
**/
class DeleteContact extends Master{
    public static function DeleteContact()
    {
        // renderiza a view da página de delete-contact.html define os valores de forma static
        $content = Views::render('pages/edits/delete-contact',[
            'id' => 21,
                'nome' => 'teste',
                    'email' => 'teste@teste.com',
                        'telefone' => '(00)999999999999',
                            'sexo' => 'm',
                                'data_nasc' => '11/11/0000'
        ]);
            return parent::MasterPage('delete new contact > page',$content);
    }
}
