<?php

require_once('classes/ParteDiego.php');
require_once('classes/ParteAlex.php');
require_once('classes/ParteJoao.php');
require_once('classes/Padrao.php');
if(isset($_GET['layout'])){
	switch ($_GET['layout']){
		case 'diego':
			$layout = new ParteDiego();
			break;
		case 'alex';
			$layout = new ParteAlex();
			break;
		case 'joao';
			$layout = new ParteJoao();
			break;
		default:
			$layout = new Padrao();
						break;
	}
} else{
	$layout = new Padrao();
}


$layout->criarPagina();

?>
