<?php

include_once('classes/LayoutAbstract.php');

class ParteAlex extends LayoutAbstract
{

	public $title = "Padrão comportamental";

	protected function titulo()
	{
		include_once('includes/titulo_alex.php');
	}

	protected function conteudo()
	{
		include_once('includes/conteudo_alex.php');	
	}

	public function getLink()
	{
		include_once('includes/link_alex.php');
	}

}