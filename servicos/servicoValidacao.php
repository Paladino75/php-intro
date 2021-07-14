<?php

function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        setarMensagemErro( 'O nome não pode ser vazio, por favor preencha-o novamente');
        return false;
    }
    else if(strlen($nome) < 3)
    {
        setarMensagemErro( 'O nome deve conter mais de 3 caracteres, por favor preencha-o novamente');
        return false;
    }
    else if(strlen($nome) > 40)
    {
        setarMensagemErro( 'nome não pode contar mais de 40 caracteres');
        return false;
    }
    return true;
}
function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    {
        $_SESSION['mensagem-de-erro'] = 'Informe um número para idade';
        return false;
    }
    return true;
}

