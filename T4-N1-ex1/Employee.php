<?php

class Employee
{
    public string $name;
    private int $salary;
    const MUST_PAY_TAXES = 6000;

    function __construct(string $name, int $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    function get_name()
    {
        return $this->name;
    }

    public function get_salary()
    {
        return $this->salary;
    }

    public function CalcTaxes(): void
    {
        if ($this->salary > self::MUST_PAY_TAXES) {
            echo  $this->name . ": You must pay your taxes. " . PHP_EOL;
        } else {
            echo $this->name . ": No need to pay taxes (yet)." . PHP_EOL;
        }
    }
}
