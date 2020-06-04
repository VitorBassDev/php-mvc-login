<?php

// CRIAR ROTA PARA A URL LOGIN
// Configuração de estrutura MVC: app/controller - model - view
// BLOQUEAR ACESSO DIRETO AS PÁGINAS 

require_once('app/core/Core.php');

$core = new Core;
$core->start($_GET); 