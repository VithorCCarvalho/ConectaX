<?php

require_once './src/classes/Crud.php';

class CadastroConsulta extends Crud 
{
	protected $table = 'consultas';

	public $nome;
	public $telefone;
	public $bairro;
	public $rua;
	public $cidade;

	public function setDados($nome, $telefone, $bairro, $rua, $cidade)
	{
		$this->nome = trim(preg_replace("/[^a-zA-Z0-9\s]/", "", $nome));
		$this->telefone = trim(preg_replace("/[^a-zA-Z0-9\s]/", "", $telefone));
		$this->bairro = trim(preg_replace("/[^a-zA-Z0-9\s]/", "", $bairro));
		$this->rua = trim(preg_replace("/[^a-zA-Z0-9\s]/", "", $rua));
		$this->cidade = trim(preg_replace("/[^a-zA-Z0-9\s]/", "", $cidade));
	}
	public function insert()
	{

		$sql  = "INSERT INTO $this->table (data, nomecliente, telefone, bairro, rua, cidade) VALUES (:data, :nome, :telefone, :bairro, :rua, :cidade)";
		$stmt = Database::prepare($sql);
		$data = date('Y-m-d H:i:s', time());
		$stmt->bindParam(':data', $data);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':telefone', $this->telefone);
		$stmt->bindParam(':bairro', $this->bairro);
		$stmt->bindParam(':rua', $this->rua);
		$stmt->bindParam(':cidade', $this->cidade);

		return $stmt->execute(); 

	}

	public function update($id)
	{
		$sql  = "UPDATE $this->table SET nome = :nome, email = :email WHERE id = :id";
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();
	}
}