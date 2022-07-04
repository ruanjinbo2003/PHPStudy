<?php
//严格模式
declare(strict_types = 1);

function add(float $a, float $b) :float {
    return $a + $b;
}
echo add(6.0,12.75);