<?php
	class Pessoas{

		//protected: variavel acessada por ela e por classes filhas.
		public $nome;
		public $idade;
		/*protected $endereco;
		protected $numero;
		protected $cidade;*/

		const SITUACAO = "PF";

		public function apresentacao(){
			echo "Olá, meu nome é ".$this->nome." tenho ".$this->idade." de Idade. Trabalho como ".$this->getCargos()." e recebo R$".$this->getSalario()." ao mês.  <br><br>";
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
		}*/


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