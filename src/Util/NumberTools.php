<?php

namespace App\Util;

/**
 * Class NumberTools
 * @package App\Util
 * @author  Dmitriy Matyuha <d.matyuha@ratio.digital>
 */
class NumberTools
{
    /**
     * @return int
     *
     * @throws \Exception
     */
    public function getNumber(): int
    {
        return random_int(0, 100);
    }
}
