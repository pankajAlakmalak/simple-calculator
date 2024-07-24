<?php
namespace SimpleCalculator;

class Calculator
{
    public function add($n1, $n2)
    {
        return $n1 + $n2;
    }

    public function sub($n1, $n2)
    {
        return $n1 - $n2;
    }

    public function mul($n1, $n2)
    {
        return $n1 * $n2;
    }

    public function div($n1, $n2)
    {
        if ($n2 == 0) {
            throw new \InvalidArgumentException('Division by zero');
        }
        return $n1 / $n2;
    }
}
