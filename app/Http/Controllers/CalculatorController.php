<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\CalculationInterface;

class CalculatorController extends Controller

{
	
	protected $calculationImplementation;

	public function __construct(CalculationInterface $calculationImplementation)
    {
        $this->calculationImplementation=$calculationImplementation;
    }
    public function index() {
        
        return view('index');
    }

    public function calculate(Request $request){
    	
    	$validatedData = $request->validate([
	        'number1' => 'bail|required|numeric',
	        'number2' => 'required|numeric',
    	]);
    	$number1=$request->input('number1');
    	$number2=$request->input('number2');
    	$results = $this->calculationImplementation->calculate($number1,$number2);
    	$operatorType=$this->calculationImplementation->getOperatorType();
    	$resultDetails=[
    		'results'=>$results,
    		'number1'=>$number1,
    		'number2'=>$number2,
    		'operator'=>$operatorType
    	];

    	return view('results',compact("resultDetails"));
    }
}
