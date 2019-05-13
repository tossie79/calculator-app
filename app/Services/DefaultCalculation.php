<?php
declare(strict_types=1);
namespace App\Services;

use  App\Repositories\Contracts\CalculationInterface;

class DefaultCalculation implements CalculationInterface
{
	/**
	 *This method does a calculation of 2 numbers
	 *@return float
     *
    */
	public function calculate(float $number1, float $number2):float
	{
		return 0.0;
	}
	/**
	 *This method returns the type of operator 
	 *@return string
     *
    */
	public function getOperatorType():string
	{
		return '';
	}
}