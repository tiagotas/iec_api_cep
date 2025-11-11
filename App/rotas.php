<?php

use App\Controller\EnderecoController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) 
{
    /**
     * [OK] Exemplo de Acesso: https://cep.metoda.com.br/endereco/by-cep?cep=17210580
     */
    case '/endereco/by-cep':
        EnderecoController::getLogradouroByCep();
    break;

    /**
     * [OK] Exemplo de Acesso: https://cep.metoda.com.br/logradouro/by-bairro?id_cidade=4874&bairro=Jardim América
     */
    case '/logradouro/by-bairro':
        EnderecoController::getLogradouroByBairroAndCidade();
    break;


    /**
     * [OK] Exemplo de Acesso: https://cep.metoda.com.br/cep/by-logradouro?logradouro=Rua Raphael de Almeida Leite
     */
    case '/cep/by-logradouro':
        EnderecoController::getCepByLogradouro();
    break;


    /**
     * [OK] Exemplo de Acesso: https://cep.metoda.com.br/cidade/by-uf?uf=SP
     */
    case '/cidade/by-uf':
        EnderecoController::getCidadesByUf();
    break;


    /**
     * [OK] Exemplo de Acesso: https://cep.metoda.com.br/bairro/by-cidade?id=4874
     */
    case '/bairro/by-cidade':
        EnderecoController::getBairrosByIdCidade();
    break;

    
    /**
     * 
     */ 
    default:
        http_response_code(403);
    break;
}