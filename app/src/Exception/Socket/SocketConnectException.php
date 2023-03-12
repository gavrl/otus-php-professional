<?php

declare(strict_types=1);

namespace Gavrl\SocketChat\Exception\Socket;

use RuntimeException;

class SocketConnectException extends RuntimeException
{
    public function __construct(string $message)
    {
        parent::__construct("failed to connect to socket: $message");
    }
}