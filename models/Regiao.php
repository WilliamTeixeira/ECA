<?php
/**
 * Description of Regiao
 * @author wtx
 */
class Regiao {
    private $id;
    private $nome;
    
    function __construct() {
        
    }
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

}
