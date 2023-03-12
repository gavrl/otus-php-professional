<?php

declare(strict_types=1);

namespace Gavrl\SocketChat\Exception\Socket;

use RuntimeException;

class ReadFromSocketException extends RuntimeException
{
    public function __construct(string $message)
    {
        parent::__construct("failed to read from socket connection: $message");
    }
}