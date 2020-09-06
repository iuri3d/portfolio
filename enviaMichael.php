<?php
if (! empty ( $_POST ['nome']) && ! empty ( $_POST ['email']) && ! empty ( $_POST ['assunto'])&& ! empty ( $_POST ['texto'])){
	$corpo = "De: " . $_POST ['nome'] . " ". $_POST ['sobrenome'] . "<" . $_POST ['email'] . " >\n\n";
	$corpo .= $_POST ['texto'];
	send_email ("michael.s.esteves@gmail.com", $_POST ['assunto'], $corpo );
} else {
	echo "<script > alert (' Erro de preenchimento !'); history . back () ;</ script >";
}

function send_email ($para , $assunto , $corpo ){
	if ( mail ($para , $assunto , $corpo )) {
		echo "<script > alert (' Mensagem pronta para envio !'); history . back () ;</ script >";
	} else {
		echo "<script > alert (' Falha no envio !'); history . back (); </ script >";
	}
}

?>