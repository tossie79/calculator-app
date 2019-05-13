<?php
declare(strict_types=1);
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
	public function calculate(float $number1, float $number2):float;
	public function getOperatorType():string;
}
