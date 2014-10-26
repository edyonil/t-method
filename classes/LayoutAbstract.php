<?php

abstract class LayoutAbstract
{

	public $title = "Padrões de Projeto";

	final function criarPagina(){
		include_once('includes/head.php');
		$this->titulo();
		$this->conteudo();
		$this->getLink();
		include_once('includes/rodape.php');
	}

	public function getLink()
	{
	}

	/**
	 * Titulo do conteúdo
	 * @return [type] [description]
	 */
	protected abstract function titulo();

	/**
	 * Conteúdo da página	
	 * @return [type] [description]
	 */
	protected abstract function conteudo();

}