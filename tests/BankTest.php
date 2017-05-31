<?php

use PHPUnit\Framework\TestCase;

final class BankTest extends TestCase
{
    public function test_we_can_instantiate_class(): void
    {

        $barclays = new \Banking\Banks\BarclaysBank(1000);

        $this->assertSame($barclays->getInterestRate(),0.01);

    }
}
