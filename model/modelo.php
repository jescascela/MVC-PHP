<?php

/*
	* Aqui no Model é onde fica a parte lógica da aplicação.
	* Neste exemplo temos uma classe extremamente simples que retorna apenas uma 
	* mensagem de texto, mas em aplicações maiores aqui é o local onde seriam feitas 
	* as comunicações com Banco de Dados por exemplo, as validações, etc.
*/

class Modelo {
	
	public function getMensagem() {
		return "Mensagem vinda do modelo.php";
	}
}
?>