<?php

    class Aluno{
    public function __construct(private string $nome = "", 
    private string $cpf = "", 
    private string $celular = "",
    $logradouro = "", $numero = "", $bairro = "", $cep= "")
    {
       $this->endereco[] = new Endereco ($logradouro, $numero, $bairro, $cep);
    }

    // metodos gets 

    public function getEnderenco()
    {
        return $this->enderenco;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getCpf()
    {
        return $this->cpf;
    }
    public function getCelular()
    {
        return $this->celular;
    }

     // metodos sets 

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
    public function setCelular($celular)
    {
        $this->celular = $celular;
    }
    public function setEndereco($logradouro, $numero, $bairro, $cep)
    {
        $this->endereco[] = new Endereco($logradouro, $numero, $bairro, $cep);
    }


}
?>