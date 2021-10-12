>?php

class Calculate{

    public function addition(int $a, int $b): int
    {
        return $a + $b;
    }

    public function soustraction(int $a, int $b): int
    {
        return $a - $b;
    }

    public function multiplication(int $a, int $b): int
    {
        return $a * $b;
    }

    public function division(int $a, int $b): float
    {
        return $a / $b;
    }
}