<?php

namespace src\dao;

use src\BD;
use srcISP\Componentes\Log;
use srcISP\interfaces\Icadastro;
use srcISP\interfaces\ILog;

class LeadModel extends BD implements Icadastro, ILog
{
    public function salvar() {
        //função usada de acordo com regra de negócio
    }

    public function registrarLog(Log $log) {
        //função implementada por obrigatoriedade da interface
    }
}