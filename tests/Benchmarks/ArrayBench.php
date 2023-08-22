<?php

namespace Tests\Benchmarks;

final class ArrayFunctionsBench extends BenchmarkCase
{
    private $sampleArray;

    public function setUp(): void
    {
        $this->sampleArray = range(1, 1000);
    }

    public function benchArrayMap(): void
    {
        array_map(function ($item) {
            return $item * 2;
        }, $this->sampleArray);
    }

    public function benchArrayFilter(): void
    {
        array_filter($this->sampleArray, function ($item) {
            return $item % 2 === 0;
        });
    }
}
