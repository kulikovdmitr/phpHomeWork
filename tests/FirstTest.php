<?php

use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    public function testOne()
    {
        require '../src/Main.php';
        $result = new Main();
        $functions = new Functions();
        $result->main();
        $load = $functions->load(Data::fields());
        $errors = $functions->validation($load);

        self::assertEquals('Field  firstname not filledField  lastname not filledField  inn not filledField  amount not filledField  period not filledField  purpose not filled', $errors);
    }
}
