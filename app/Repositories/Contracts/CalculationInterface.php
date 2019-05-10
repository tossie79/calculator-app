<?php
namespace App\Repositories\Contracts;

interface CalculationInterface{

	public function calculate($number1,$number2);
	public function getOperatorType();
}
