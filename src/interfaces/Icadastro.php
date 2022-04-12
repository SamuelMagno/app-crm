<?php

namespace src\interfaces;

use src\Componentes\Log;
use src\Componentes\Notificacao;

interface Icadastro {
    public function salvar();

    public function registrarLog(Log $log);

    public function enviarNotificacao(Notificacao $notificacao);
}