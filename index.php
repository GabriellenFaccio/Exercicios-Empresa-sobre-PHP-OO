<?php
	include_once "Pessoa.php";
	include_once "Cliente.php";

	$Pessoa1 = new Cliente;
	$Pessoa1->setNome("Ana Clara Martins");
	$Pessoa1->setIdade("22");
	$Pessoa1->setEndereco("Rua Paulino Viera");
	$Pessoa1->setNumero("224");
	$Pessoa1->setCidade("Ibitinga");
	$Pessoa1->Entrada("12366544789");
	$Pessoa1->setRg("142365789");
	$Pessoa1->setId("1");

	echo $Pessoa1->getNome()."<br>";
	echo $Pessoa1->getIdade()."<br>";
	echo $Pessoa1->getEndereco()."<br>";
	echo $Pessoa1->getNumero()."<br>";
	echo $Pessoa1->getCidade()."<br>";
	echo $Pessoa1->getCpf()."<br>";
	echo $Pessoa1->getRg()."<br>";
	echo $Pessoa1->getId()."<br>";

	echo $Pessoa1::SITUACAO;

?>