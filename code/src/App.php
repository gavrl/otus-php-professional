<?php

declare(strict_types=1);

namespace Gavrl\OtusPhp;

use Gavrl\OtusSumPackage\Calculator;

class App
{
    public function run(): void
    {
        $calculator = new Calculator();

        echo $calculator->sum(4, 2.1);
    }
}