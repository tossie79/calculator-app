<?php
namespace App\Repositories;

use  App\Repositories\Contracts\CalculationInterface;

class DefaultCalculation implements CalculationInterface{

	public function calculate($number1,$number2){
		return '';
	}
	public function getOperatorType(){
		return '';
	}
}