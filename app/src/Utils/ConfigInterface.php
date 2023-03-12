<?php

namespace Gavrl\SocketChat\Utils;

interface ConfigInterface
{
    public function init(): void;
    public function get(string $key): string;
}