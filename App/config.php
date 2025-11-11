<?php

define('BASEDIR', dirname(__FILE__, 2));

/**
 * Banco de Dados
 * No Docker Compose, use: meu_servidor_mysql:3306
 * No Kubernetes, use: mysql:3306
 */
$_ENV['db']['host'] = 'mysql:3306';
$_ENV['db']['user'] = 'root';
$_ENV['db']['pass'] = 'root';
$_ENV['db']['database'] = 'busca_by_cep';


