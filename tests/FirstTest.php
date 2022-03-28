<?php

use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    public function testOne()
    {
        require '../src/Main.php';
        $result = new Main();
//        self::assertEquals('',$result->main());
    }
}
