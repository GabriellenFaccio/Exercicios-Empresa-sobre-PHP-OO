<?php
	class Socios extends Pessoas{
		public $pctCapital;
		public $posicao; //diretor, presidente, vice ...


		public function setPctCapital($novaPctCapital){
			$this->pctCapital = $novaPctCapital;
		}

		public function setPosicao($novaPosicao){
			$this->posicao = $novaPosicao;
		}

		//---------------   Gets     -------------------

		public function getPctCapital(){
			return $this->pctCapital;
		}

		public function getPosicao(){
			return $this->posicao;
		}
	}

?>