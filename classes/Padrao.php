<?php

include_once('classes/LayoutAbstract.php');

class Padrao extends LayoutAbstract
{

	protected function titulo()
	{
		include_once('includes/titulo_padrao.php');
	}

	protected function conteudo()
	{
		include_once('includes/conteudo_padrao.php');	
	}

	/*public function getLink()
	{
		return '<div class="button left"><a href="http://www.devmedia.com.br/patterns-template-method/18953">Clique aqui e acesse detalhes sobre o artigo</a></div>';
	}*/

}