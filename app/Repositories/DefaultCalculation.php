<?php
namespace App\Repositories;

use  App\Repositories\Contracts\CalculationInterface;

class DefaultCalculation implements CalculationInterface
{
	/**
	 *This method does a calculation of 2 numbers
	 *@return int
     *
    */
	public function calculate($number1, $number2)
	{
		return '';
	}
	/**
	 *This method returns the type of operator 
	 *@return string
     *
    */
	public function getOperatorType()
	{
		return '';
	}
}