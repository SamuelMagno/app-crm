<?php

namespace srcISP\interfaces;

use srcISP\Componentes\Notificacao;

interface INotificacao {
    public function enviarNotificacao(Notificacao $notificacao);
}