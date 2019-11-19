<?php
include_once "./criar_classe_banco.inc.php";
class Tabelas
{
  public $tabelaUsuario;
  
  function criarTabelaUsuario($conexao)
  {
    $sql = " CREATE TABLE IF NOT EXISTS $this->tabelaUsuario(
      usuario VARCHAR(50) PRIMARY KEY,
      senha VARCHAR(130),
      email VARCHAR(300)) ENGINE=inniDB";
      
      $conexao->query($sql) or die($conexao->error);
  }

  

}