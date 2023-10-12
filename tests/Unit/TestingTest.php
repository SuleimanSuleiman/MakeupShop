<?php

namespace Tests\Unit;

use App\Http\Controllers\Categories\MainCategoryController;
use PHPUnit\Framework\TestCase;

class TestingTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    public function findProfit(): void
    {
        $accountenthelper = new MainCategoryController();

        $profil = $accountenthelper->findProfit(100);

        $this->assertLessThan(11, $profil);
    }
}