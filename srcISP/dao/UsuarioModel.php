<?php

namespace src\dao;

use src\BD;
use srcISP\Componentes\Log;
use srcISP\Componentes\Notificacao;
use srcISP\interfaces\Icadastro;
use srcISP\interfaces\ILog;
use srcISP\interfaces\INotificacao;

class UsuarioModel extends BD implements Icadastro, ILog, INotificacao
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