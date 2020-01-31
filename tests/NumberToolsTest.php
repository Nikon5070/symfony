<?php

namespace App\Tests;

use App\Util\NumberTools;
use PHPUnit\Framework\TestCase;

class NumberToolsTest extends TestCase
{
    public function testGetNumber()
    {
        $numberTools = new NumberTools();
        $resultType = is_int($numberTools->getNumber());

        $this->assertTrue($resultType,'Верно, метод вернул число');
        $this->assertFalse($resultType, 'Не верно, метод не верну число');
    }
}
