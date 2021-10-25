<?php

class Test {
    public function sum(int $a, int $b): int
    {return $a+$b;}

    public function execute(): int
    {
        $a =10;
        $b ='PHP';
        return $this->sum($a,$b);
    }











}
