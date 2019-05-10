<?php
namespace App\Repositories;

use  App\Repositories\Contracts\CalculationInterface;

class DivisionCalculation implements CalculationInterface
{
	/**
	 *This method does an division calculation of 2 numbers
	 *@return int
     *
    */
	public function calculate($number1, $number2)
	{
		return($number1 / $number2);
	}
	/**
	 *This method returns the type of operator 
	 *@return string
     *
    */
	public function getOperatorType()
	{
		return '/';
	}
}