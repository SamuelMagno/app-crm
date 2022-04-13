<?php

namespace srcISP\interfaces;

use srcISP\Componentes\Log;

interface ILog {
    public function registrarLog(Log $log);
}