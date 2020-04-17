<?php
	abstract class Pessoas{

		const SITUACAO = "PF";
		abstract protected function setNome($novoNome);
		abstract protected function setIdade($novaIdade);

		abstract protected function apresentacao();
		/*
		//protected: variavel acessada por ela e por classes filhas.
		public $nome;
		public $idade;

		

		public function apresentacao(){
			if($this->getClass() == "Socios")
				echo "Olá, meu nome é ".$this->nome." tenho ".$this->idade." anos de Idade. Trabalho como ".$this->getPosicao()." em minha empresa e possuo cerca de ".$this->getPctCapital()."% de ações dela   <br><br>";

			elseif($this->getClass() == "Funcionarios")
				echo "Olá, meu nome é ".$this->nome." tenho ".$this->idade." anos de Idade. Trabalho como ".$this->getCargos()." e recebo R$".$this->getSalario()." ao mês.  Entrei em ".$this->getDataEntrada()." e possuo ".$this->getFilhos()." filho(s)  <br><br>";
			elseif($this->getClass() == "Cliente")
				echo "Olá, meu nome é ".$this->nome." tenho ".$this->idade." anos de Idade. Sou cliente dessa empresa e meus documentos são CPF :  ".$this->getCpf()." e também meu RG :  ".$this->getRg()." .  <br>";

			/*echo "Teste Apresentação PJ  <br>";
			echo "Olá, meu nome é ".$this->nome." tenho ".$this->idade." de Idade. ";
		}

		public function setNome($novoNome){
			$this->nome = $novoNome;
		}

		public function setIdade($novaIdade){
			$this->idade = $novaIdade;
		}

		/*public function setEndereco($novoEndereco){
			$this->endereco = $novoEndereco;
		}

		public function setNumero($novoNumero){
			$this->numero = $novoNumero;
		}

		public function setCidade($novaCidade){
			$this->cidade = $novaCidade;
		}


		//---------     GETS      ---------------
		
		
		public function getNome(){
			return $this->nome;
		}

		public function getIdade(){
			return $this->idade;
		}

		/*public function getEndereco(){
			return $this->endereco;
		}

		public function getNumero(){
			return $this->numero;
		}

		public function getCidade(){
			return $this->cidade;
		}*/

	}

?>