<?php

class Funcionario
{	
	protected String $nome;

	public $cargo;

	public function __construct($cargo)
	{
		$this->cargo = $cargo;
	}
	
	public function definirNome(String $nome):void
	{
		$this->nome = $nome;
	}

	public function pegarSalario()
	{
		return $this->cargo->calculaSalario();
	}

}

class Desenvolvedor
{
	protected Graduavel $nivel;

	public function __construct(Graduavel $nivel)
	{
		$this->nivel = $nivel;
	}

	public function calculaSalario():float
	{
		return $this->nivel->salarioBase();
	}
}

class Gerente
{
	protected float $salarioBase = 5000.00;

	public function calculaSalario():float
	{
		return $this->salarioBase;
	}
}

interface Graduavel
{
	public function salarioBase():float;
}

class fullstack1 implements Graduavel
{
	public function salarioBase():float{
		return 2000.00;
	}
}

class fullstack2 implements Graduavel
{
	public function salarioBase():float{
		return 3000.00;
	}
}

class fullstack3 implements Graduavel
{
	public function salarioBase():float{
		return 4000.00;
	}
}

