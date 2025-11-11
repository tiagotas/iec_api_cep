<?php

namespace App\Model;

use App\DAO\BairroDAO;

/**
 * A camada model é responsável por transportar os dados da Controller até a DAO e vice-versa.
 * Também é atribuído a Model a validação dos dados da View e controle de acesso aos métodos
 * da DAO.
 */
class BairroModel extends Model
{
    public $id, $nome;
   
    /*public function getAllRows(int $id_cidade)
    {      
        $dao = new BairroDAO();

        $this->rows = $dao->selectBairrosByIdCidade($id_cidade);
    }*/ 
}