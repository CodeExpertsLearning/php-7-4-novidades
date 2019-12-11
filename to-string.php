<?php 

class Produto
{
    public function __toString()
    {
        if(true) {
            throw new Exception("Você pode lançar exceptions no PHP 7.4 como retorno");   
        }

        return 'Você tentou printar este objeto: ' . __CLASS__;
    }
}

$produto = new Produto;

print $produto;