<?php

namespace Tests\Benchmarks;

/**
 * @BeforeMethods({"setUp"})
 * @AfterMethods({"tearDown"})
 */
abstract class BenchmarkCase
{
    public function setUp(): void
    {
        //
    }

    public function tearDown(): void
    {
        //
    }
}
