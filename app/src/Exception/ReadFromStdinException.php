<?php

declare(strict_types=1);

namespace Gavrl\SocketChat\Exception;

use RuntimeException;

class ReadFromStdinException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct('can\'t read from STDIN');
    }
}