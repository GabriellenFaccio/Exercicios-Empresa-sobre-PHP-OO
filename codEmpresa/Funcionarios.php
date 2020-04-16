<?php
	class Funcionarios extends Pessoas{
		public $cargos;
		public $dataEntrada;
		public $salario;
		public $situacao;
		public $filhos;

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

	}
	
?>