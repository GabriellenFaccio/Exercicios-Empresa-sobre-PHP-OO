<?php
	include_once "Classes/Pessoas.class.php";
	include_once "Classes/Cliente.class.php";
	include_once "Classes/Funcionarios.class.php";
	include_once "Classes/Socios.class.php";

	$Pessoa1 = new Funcionarios;
	$Pessoa1->setNome("Ana Clara Martins");
	$Pessoa1->setIdade("22");

	$Pessoa1->setCargos("Auxiliar Cozinha");
	$Pessoa1->setDataEntrada("01/05/2019");
	$Pessoa1->setSalario("2.000,00");
	$Pessoa1->setSituacao("Contratado");
	$Pessoa1->setFilhos("1");

	$Pessoa2 = new Socios;
	$Pessoa2->setNome("Mirela Angeliz Cortinho");
	$Pessoa2->setIdade("29");

	$Pessoa2->setPctCapital("70");
	$Pessoa2->setPosicao("Diretor");


	$Pessoa3 = new Cliente;
	$Pessoa3->setNome("Higor Luis Gilgas");
	$Pessoa3->setIdade("31");

	$Pessoa3->setCpf("12345678936");
	$Pessoa3->setRg("12547896");




	$Pessoa1->apresentacao();
	$Pessoa2->apresentacao();
	$Pessoa3->apresentacao();

	//echo "Olá, meu nome é ".$Pessoa1->getNome()." tenho ".$Pessoa1->getIdade()." de Idade. Trabalho como ".$Pessoa1->getCargos()." e recebo R$".$Pessoa1->getSalario()." ao mês.  <br><br>";

	//echo "Olá, meu nome é ".$Pessoa2->getNome()." tenho ".$Pessoa2->getIdade()." de Idade.  Possuo cerca de ".$Pessoa2->getPctCapital()."% de ações da Empresa. Minha função é de ".$Pessoa2->getPosicao()." do departamento Financeiro.  <br>";


	echo $Pessoa1::SITUACAO;

?>