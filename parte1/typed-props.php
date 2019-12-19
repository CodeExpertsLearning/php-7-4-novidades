<?php 

class Pessoa
{
    public string $nome;
    public int $idade;
}

$pessoa = new Pessoa();
$pessoa->nome = 'Teste';
$pessoa->idade = 30;

print $pessoa->nome . ' têm ' . $pessoa->idade . ' anos';