<?php

namespace App\Model\Database;
use App\DAO\Dao;
/**
	*classe responsável por realizar as operações no banco de dados
**/
class Database{
// atributos responsável por definir os valores da tabela do banco de dados
	public $id;
	public $nomeContato;
	public $emailContato;
	public $telefoneContato;
	public $sexoContato;
	public $dataNascContato;
 	// var rows responsável por receber as linhas vindas do banco de dados
	public $rows;
// cria uma nova instância da class [Dao] e insere no banco de dados
	public function save()
	{
		$objectDao = new Dao();
			$objectDao->insert($this);
	}
// cria uma nova instância da class [Dao] e retorna o conteúdo do banco de dados
	public function selectFetchAll()
	{
		$objectDao = new Dao();
			$this->rows = $objectDao->select();
	}
}
