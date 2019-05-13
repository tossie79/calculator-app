<?php
declare(strict_types=1);
namespace App\Services;

use  App\Repositories\Contracts\CalculationInterface;

class BitwiseOrCalculation implements CalculationInterface
{
	/**
	 *This method does an bitwise or (|) calculation of 2 numbers
	 *@return float
     *
    */
	public function calculate(float $number1, float $number2):float
	{
		return($number1 | $number2);
	}
	
	/**
	 *This method returns the type of operator 
	 *@return string
     *
    */
	public function getOperatorType():string
	{
		return '|';
	}
}