<?php
declare(strict_types=1);
namespace App\Traits;

trait OperatorTraits
{
	protected $operatorClassServices =  [
        'add'=>'AdditionCalculation',
        'subtract'=>'SubtractionCalculation',
        'multiply'=>'MultiplicationCalculation',
        'divide'=>'DivisionCalculation',
        'bitwiseAnd'=>'BitwiseAndCalculation',
        'bitwiseOr'=>'BitwiseOrCalculation'
    ];

	public function getOperatorClass():array
    {
		return $this->operatorClassArray;
	}
}