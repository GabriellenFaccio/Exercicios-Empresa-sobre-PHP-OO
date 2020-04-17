<?php
	class Socios extends Pessoas{
		public $pctCapital;
		public $posicao; //diretor, presidente, vice ...

		public $nome;
		public $idade;

		public function setNome($novoNome){
			$this->nome = $novoNome;
		}

		public function setIdade($novaIdade){
			$this->idade = $novaIdade;
		}

		public function apresentacao(){
			echo "Olá, meu nome é ".$this->nome." tenho ".$this->idade." anos de Idade. Trabalho como ".$this->posicao." em minha empresa e possuo cerca de ".$this->pctCapital."% de ações dela   <br><br>";
		}

		public function setPctCapital($novaPctCapital){
			$this->pctCapital = $novaPctCapital;
		}

		public function setPosicao($novaPosicao){
			$this->posicao = $novaPosicao;
		}

		//---------------   Gets     -------------------

		public function getClass(){
			return __CLASS__;
		}

		public function getPctCapital(){
			return $this->pctCapital;
		}

		public function getPosicao(){
			return $this->posicao;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getIdade(){
			return $this->idade;
		}
	}

?>