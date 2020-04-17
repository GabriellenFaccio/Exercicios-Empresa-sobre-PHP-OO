<?php
	class Funcionarios extends Pessoas{
		public $cargos;
		public $dataEntrada;
		public $salario;
		public $situacao;
		public $filhos;
		public $nome;
		public $idade;

		public function setNome($novoNome){
			$this->nome = $novoNome;
		}

		public function setIdade($novaIdade){
			$this->idade = $novaIdade;
		}

		public function apresentacao(){
			echo "Olá, meu nome é ".$this->nome." tenho ".$this->idade." anos de Idade. Trabalho como ".$this->cargos." e recebo R$".$this->salario." ao mês.  Entrei em ".$this->dataEntrada." e possuo ".$this->filhos." filho(s)  <br><br>";
		}

		public function setCargos($novosCargos){
			$this->cargos = $novosCargos;
		}

		public function setDataEntrada($novaDataEntrada){
			$this->dataEntrada = $novaDataEntrada;
		}

		public function setSalario($novoSalario){
			$this->salario = $novoSalario;
		}

		public function setSituacao($novaSituacao){
			$this->situacao = $novaSituacao;
		}

		public function setFilhos($novosFilhos){
			$this->filhos = $novosFilhos;
		}


		//----------  Gets   -----------------

		public function getClass(){
			return __CLASS__;
		}

		public function getCargos(){
			return $this->cargos;
		}

		public function getDataEntrada(){
			return $this->dataEntrada;
		}

		public function getSalario(){
			return $this->salario;
		}

		public function getSituacao(){
			return $this->situacao;
		}

		public function getFilhos(){
			return $this->filhos;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getIdade(){
			return $this->idade;
		}

	}
	
?>