<?php
	class Cliente extends Pessoas{
		public $cpf;
		public $rg;
		public $id;

		public $nome;
		public $idade;


		public function setNome($novoNome){
			$this->nome = $novoNome;
		}

		public function setIdade($novaIdade){
			$this->idade = $novaIdade;
		}

		public function apresentacao(){
			echo "Olá, meu nome é ".$this->nome." tenho ".$this->idade." anos de Idade. Sou cliente dessa empresa e meus documentos são CPF :  ".$this->cpf." e também meu RG :  ".$this->rg." .  <br>";

		}

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

		public function getClass(){
			return __CLASS__;
		}

		public function getCpf(){
			return $this->cpf;
		}

		public function getRg(){
			return $this->rg;
		}

		public function getId(){
			return $this->id;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getIdade(){
			return $this->idade;
		}
	}

?>