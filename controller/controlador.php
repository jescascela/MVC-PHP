<?php

/*
	* O Controller é responsável por receber as requisições do usuário.
	* Além disso o Controller também faz as comunicações com o Model e a View
*/

require_once 'model/modelo.php'; // Carrega o arquivo modelo.php

class Controlador {
	
	// Normalmente o método padrão dos controladores é chamado de index
	public function index() {
		$modelo = new Modelo(); // Cria um objeto Modelo
		$mensagem = $modelo->getMensagem(); // Chama o método getMensagem() do modelo
		require_once 'view/view.php'; // Carrega o arquivo view.php
	}
}
?>