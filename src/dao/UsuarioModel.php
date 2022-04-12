<?php

namespace src\dao;

use src\BD;
use src\Componentes\Log;
use src\Componentes\Notificacao;
use src\interfaces\Icadastro;

class UsuarioModel extends BD implements Icadastro 
{
    public function salvar() {
        //função implementada de acordo com regra de negócio
    }

    public function registrarLog(Log $log) {
        //função implementada de acordo com regra de negócio
    }

    public function enviarNotificacao(Notificacao $notificacao) {
        //função implementada de acordo com regra de negócio
    }
}