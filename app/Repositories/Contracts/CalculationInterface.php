<?php
namespace App\Repositories\Contracts;

interface CalculationInterface
{
	/*
    |--------------------------------------------------------------------------
    | Calculation Interface
    |--------------------------------------------------------------------------
    |
    | This interface contains 2 methods which the implemeted classes use to do the calculations
    | as well as get the operator type
    |
    */
	public function calculate($number1, $number2);
	public function getOperatorType();
}
