<?php

namespace App\Controller;

use App\Model\{ EnderecoModel, CidadeModel };
use Exception;


/**
 * Responsável por controlar as requisições para obter endereços completos,
 * lista de Ceps ou lista de Bairros.
 */
class EnderecoController extends Controller
{
    /**
     * Obtém a lista de Ceps a partir de um logradouro.
     */
    public static function getCepByLogradouro() : void
    { 
        try
        {             
            $logradouro = $_GET['logradouro'];

            $model = new EnderecoModel();
            $model->getCepByLogradouro($logradouro);

            parent::getResponseAsJSON($model->rows);
              
        } catch (Exception $e) {

            parent::getExceptionAsJSON($e);
        }      
    }


    /**
     * Obtém a lista de logradouros com base no bairro de uma cidade
     */
    public static function getLogradouroByBairroAndCidade() : void
    { 
        try
        {
            $bairro = parent::getStringFromUrl(isset($_GET['bairro']) ? $_GET['bairro'] : null, 'bairro');            
            $id_cidade = parent::getIntFromUrl(isset($_GET['id_cidade']) ? $_GET['id_cidade'] : null, 'cep');

            $model = new EnderecoModel();
            
            $model->getLogradouroByBairroAndCidade($bairro, $id_cidade);

            parent::getResponseAsJSON($model->rows);
              
        } catch (Exception $e) {

            parent::getExceptionAsJSON($e);
        }      
    }


    /**
     * Obtém os dados de endereço a partir de um CEP.
     */
    public static function getLogradouroByCep() : void
    {
        try 
        {
            $cep = parent::getIntFromUrl(isset($_GET['cep']) ? $_GET['cep'] : null);

            $model = new EnderecoModel();

            parent::getResponseAsJSON($model->getLogradouroByCep($cep));

        } catch (Exception $e) {

            parent::getExceptionAsJSON($e);
        }
    }


    /**
     * Obtém uma lista de bairros a partir do id de uma cidade.
     */
    public static function getBairrosByIdCidade() : void
    {
        try 
        {
            $id_cidade = parent::getIntFromUrl(isset($_GET['id_cidade']) ? $_GET['id_cidade'] : null);

            $model = new EnderecoModel();
            $model->getBairrosByIdCidade($id_cidade);

            parent::getResponseAsJSON($model->rows);

        } catch (Exception $e) {

            parent::getExceptionAsJSON($e);
        }        
    }


    /**
     * 
     */
    public static function getCidadesByUf()
    {
        try 
        {
            $uf = $_GET['uf'];

            $model = new CidadeModel();
            $model->getCidadesByUf($uf);

            parent::getResponseAsJSON($model->rows);

        } catch (Exception $e) {

            parent::getExceptionAsJSON($e);
        }          
    }
}