<?php

namespace Benchmark;

class StringBench
{
    private string $string;

    public function __construct()
    {
        $this->string = str_repeat('Hello World', 100);
    }

    /**
     * Benchmark str_replace.
     *
     * @Revs(1000)
     * @Iterations(5)
     */
    public function benchStrReplace(): void
    {
        str_replace('Hello', 'Hi', $this->string);
    }

    /**
     * Benchmark strtoupper.
     *
     * @Revs(1000)
     * @Iterations(5)
     */
    public function benchStrToUpper(): void
    {
        strtoupper($this->string);
    }

    /**
     * Benchmark exploding the string.
     *
     * @Revs(500)
     * @Iterations(3)
     */
    public function benchExplode(): void
    {
        explode(' ', $this->string);
    }
}
