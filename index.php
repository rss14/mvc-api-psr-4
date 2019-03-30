<?php
session_start();
header("Access-Control-Allow-Origin: *"); // permisão apra ser acessado por qualquer dominio
header("Access-Control-Allow-Methods: *"); // permisão liberado para ser acessado com todos metodos GET, PUT, POST, OPTIONS e DELETE

require 'config.php';
require 'routers.php'; // arquivo de rotas
require 'vendor/autoload.php';

$core = new Core\Core();
$core->run();