<?php

namespace src\dao;

use src\BD;
use src\Componentes\Log;
use src\Componentes\Notificacao;
use src\interfaces\Icadastro;

class ContratoModel extends BD implements Icadastro 
{
    public function salvar() {
        //função implementada de acordo com regra de negócio
    }

    public function registrarLog(Log $log) {
        //função implementada por obrigatoriedade da interface
    }

    public function enviarNotificacao(Notificacao $notificacao) {
        //função implementada por obrigatoriedade da interface
    }
}