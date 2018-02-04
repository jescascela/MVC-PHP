<?php
/*
	* Aqui no index.php é onde tudo começa. 
	* Vamos apenas carregar o controlador padrão que no caso é controlador.php
*/
require_once 'controller/controlador.php'; // Carrega o arquivo controlador.php
$controlador = new Controlador(); // Cria um objeto Controlador
$controlador->index(); // Chama o método index() do controlador
?>