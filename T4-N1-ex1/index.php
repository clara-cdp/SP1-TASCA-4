<?php
include('Employee.php');

$employee1 = new Employee("John", 7000);
$employee1->calcTaxes();

$employee2 = new Employee("Paul", 4500);
$employee2->calcTaxes();
