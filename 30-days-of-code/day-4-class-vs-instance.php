<?php

// https://www.hackerrank.com/challenges/30-class-vs-instance/problem

class Person
{
    /** @var int */
    public $age;

    /**
     * @param int $initialAge
     */
    public function __construct(int $initialAge)
    {
        if ($initialAge < 0) {
            $this->age = 0;
            echo "Age is not valid, setting age to 0.\n";
        } else {
            $this->age = $initialAge;
        }
    }

    /**
     * @return void
     */
    public function amIOld()
    {
        if ($this->age < 13) {
            echo "You are young.\n";
        } elseif ($this->age >= 13 && $this->age < 18) {
            echo "You are a teenager.\n";
        } else {
            echo "You are old.\n";
        }
    }

    /**
     * @return void
     */
    public function yearPasses()
    {
        $this->age++;
    }
}

$T = intval(fgets(STDIN));
for ($i = 0; $i < $T; $i++) {
    $age = intval(fgets(STDIN));

    $p = new Person($age);
    $p->amIOld();

    for ($j = 0; $j < 3; $j++) {
        $p->yearPasses();
    }

    $p->amIOld();
    echo "\n";

}
