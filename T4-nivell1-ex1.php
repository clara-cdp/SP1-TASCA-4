<?php
/*Crea una classe que representi un empleat, amb atributs referits al seu nom i sou. 
Defineix un mètode que rebi com a paràmetres el nom i el sou. 
Planteja un segon mètode que imprimeixi el nom i un missatge que mostri si ha de pagar o no impostos 
(si el sou en supera 6000, paga impostos).*/

class employee
{
    public string $name;
    public int $salary;
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

    function get_salary()
    {
        return $this->salary;
    }

    function get_salaryTaxes()
    {
        if ($this->salary > self::MUST_PAY_TAXES) {
            echo  $this->name . ": You must pay your taxes. " . PHP_EOL;
        } else {
            echo $this->name . ": No need to pay taxes (yet)." . PHP_EOL;
        }
    }
}

$employee1 = new employee("John", 7000);
$employee1->get_salaryTaxes();

$employee2 = new employee("Paul", 4500);
$employee2->get_salaryTaxes();
