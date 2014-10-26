<?php

include_once('classes/LayoutAbstract.php');

class ParteJoao extends LayoutAbstract
{

	protected function titulo()
	{
		include_once('includes/titulo_joao.php');
	}

	protected function conteudo()
	{
		include_once('includes/conteudo_joao.php');	
	}

}