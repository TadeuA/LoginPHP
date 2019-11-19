<?php
  class Banco
  {
    public $servidor = "localhost";
    public $usuario = "user";
    public $senha = "senha";
    public $nomeDoBanco = "nome_do_banco";
  }

  function conectar()
  {
    $conexao = new mysqli($this->servidor, $this->usuario, $this->senha) or die($conexao->eror);
  }