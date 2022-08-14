<?php
namespace App\DAO;
use \PDO;
/**
    * classe responsável por realizar a conexão,
    * e definir os métodos 'SELECT','INSERT','UPDATE','DELETE' 
    * com o banco de dados
**/
class Dao{
    private $connection;
    public function __construct()
    {
        // conexão com banco de dados
        try {
            $this->connection = new PDO("mysql:host=localhost;dbname=sysagenda",'root','');
                // print 'connection successful';
                return true;
        } catch (PDOException $e) {
             // die('Error: Connection fail').$e->getMessage();
             return false;
        }
    }
// método responsável por realizar a query [sql] INSERT
    public function insert($dataBase)
    {
        $sql = "INSERT INTO tb_agenda(
            nomeContato,
                emailContato,
                    telefoneContato,
                sexoContato,
            dataNascContato
        ) VALUES(
            :nome,
                :email,
                    :telefone,
                :sexo,
            :dataNasc
        )";
        $stmt = $this->connection->prepare($sql);
    /**
    *  recebe os valores vindos da [Controller/Pages/NewContact.php]
    **/
            $stmt->bindValue(':nome',$dataBase->nomeContato);
                $stmt->bindValue(':email',$dataBase->emailContato);
                    $stmt->bindValue(':telefone',$dataBase->telefoneContato);
                        $stmt->bindValue(':sexo',$dataBase->sexoContato);
                            $stmt->bindValue(':dataNasc',$dataBase->dataNascContato);
        $stmt->execute();
    }
    public function update()
    {
        // continuar
    }

    public function delete()
    {
        // continuar
    }
// método responsável por realizar a query [sql] SELECT
    public function select()
    {
        $sql = "SELECT * FROM tb_agenda";
            $stmt = $this->connection->prepare($sql);
                $stmt->execute();
                    $results = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $results;
    }
}
