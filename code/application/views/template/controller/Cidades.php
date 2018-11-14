<?php

class Cidades
{
	public $cidades;
	public $estado;

	public function OpenJson()
	{
		// Atribui o conteúdo do arquivo para variável $arquivo
		$arquivo = file_get_contents('controller/Cidades.json');
 
		// Decodifica o formato JSON e retorna um Objeto
		$json = json_decode($arquivo);

		return $json;
	}

	public function setEstado($estado)
	{
		switch ($estado) {
			case 'MG':
				$estado = '10';
				break;
			case 'AC':
				$estado = '1';
				break;
			case 'AL':
				$estado = '2';
				break;
			default:
				$estado = '1';
				break;
		}

		$this->cidades = $this->OpenJson()[$estado]->cidades;
	}
	public function getCidades()
	{
		return $this->cidades;
	}
}