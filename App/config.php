<?php

define('BASEDIR', dirname(__FILE__, 2));

/**
 * Banco de Dados
 * No Docker Compose/Kubernetes, use: meu_servidor_mysql:3306
 */
$_ENV['db']['host'] = 'meu_servidor_mysql:3306';
$_ENV['db']['user'] = 'root';
$_ENV['db']['pass'] = 'root';
$_ENV['db']['database'] = 'busca_by_cep';


