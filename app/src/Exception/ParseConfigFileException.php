<?php

declare(strict_types=1);

namespace Gavrl\SocketChat\Exception;

use RuntimeException;

class ParseConfigFileException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct('parse config file error');
    }
}