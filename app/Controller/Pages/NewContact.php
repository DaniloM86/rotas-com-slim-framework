<?php

namespace App\Controller\Pages;
use App\Views\Views;
use App\Model\Database\Database;
/**
    * @method controller
    * define as configurações de controle [public/views/pages/edits/new-contact.html]
**/
class NewContact extends Master{
    public static function getNewContact()
    {
        // renderiza a view da página de new-contact
        $content = Views::render('pages/edits/new-contact',[
            // vars
        ]);
            return parent::MasterPage('create new contact > page',$content);
    }
/**
    * @method responsável por receber os dados do usuário vindos do formulário
    * [public/views/pages/edits/new-contact.html]
**/
    public static function save()
    {
        $dataBase = new Database();
        $dataBase->nomeContato = htmlentities(htmlspecialchars($_POST['nomeContato']));
            $dataBase->emailContato = htmlentities(htmlspecialchars($_POST['emailContato']));
                $dataBase->telefoneContato = htmlentities(htmlspecialchars($_POST['telefoneContato']));
            $dataBase->sexoContato = htmlentities(htmlspecialchars($_POST['sexoContato']));
        $dataBase->dataNascContato = htmlentities(htmlspecialchars($_POST['dataNascContato']));
        // verifica se não existe campos vazios
        if (!empty($dataBase->nomeContato)
            && !empty($dataBase->emailContato)
            && !empty($dataBase->telefoneContato)
            && !empty($dataBase->sexoContato)
            && !empty($dataBase->dataNascContato))
            {
            // recebe o método [save] da class [Database]
                $dataBase->save();
                    print json_encode('cadastro realizado com sucesso');
                        exit;
        }
        print json_encode('Error: preencha todos os campos');
            exit;
    }
}
