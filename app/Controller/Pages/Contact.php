<?php

namespace App\Controller\Pages;
use App\Views\Views;
use App\Model\Database\Database;
/**
    * @method controller [Contact Page]
    * define as configurações de controle da página de contatos
    * class [filho] extends [master]
**/
class Contact extends Master{
/**
    * @method responsável por receber os valores do banco de dados,
    * [public/views/pages/contact.html]
**/
    private static function getContactItems()
    {
        $itens = '';
        $objectModel = new Database();
        $objectModel->selectFetchAll();
        $returnRows = $objectModel->rows;
        foreach ($returnRows as $model) {
            $itens .= Views::render('pages/contact/itens',[
                'id' => $model->idContato,
                    'nome' => $model->nomeContato,
                        'email' => $model->emailContato,
                        'telefone' => $model->telefoneContato,
                    'sexo' => $model->sexoContato,
                'data_nasc' => $model->dataNascContato,
            ]);
        }
        // retorna as informações do banco
        return $itens;
    }
    public static function getContact()
    {
/**
    * recebe os valores do @method 'getContactItems'
    * alterar o valor da chave {{itens}} na página de contato.html
**/
        // renderiza a página de contact.html com os valores vindos do banco de dados
        $content = Views::render('pages/contact',[
            'itens' => self::getContactItems()
        ]);
            return parent::MasterPage('contact > page',$content);
    }
}
