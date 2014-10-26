<?php

include_once('classes/LayoutAbstract.php');

class ParteDiego extends LayoutAbstract
{

	protected function titulo()
	{
		include_once('includes/titulo_diego.php');
	}

	protected function conteudo()
	{
		include_once('includes/conteudo_diego.php');	
	}

}