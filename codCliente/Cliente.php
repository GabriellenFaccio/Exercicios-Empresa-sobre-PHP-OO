<?php
	class Cliente extends Pessoas{
		public $cpf;
		protected $rg;
		protected $id;

		public function setCpf($novoCpf){
			$this->cpf = $novoCpf;
		}

		public function setRg($novoRg){
			$this->rg = $novoRg;
		}

		public function setId($novoId){
			$this->id = $novoId;
		}


		//---------     GETS      ---------------


		public function getCpf(){
			return $this->cpf;
		}

		public function getRg(){
			return $this->rg;
		}

		public function getId(){
			return $this->id;
		}
	}

?>