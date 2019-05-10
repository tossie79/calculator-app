<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\CalculationInterface;

class CalculatorController extends Controller
{
	/*
    |--------------------------------------------------------------------------
    | Calculator Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling calculations based on 2 numbers
    | and an operator : plus,minus,multiply,divide, bitwise And, bitwise Or
    |
    */
	
	protected $calculationImplementation;
	
	/**
     * Create a new controller instance with a CalculationInterface
     *
     * @return void
     */
	public function __construct(CalculationInterface $calculationImplementation)
	{
        $this->calculationImplementation = $calculationImplementation;
    }
	/**
     * Index action which shows the calculator form.
     *
     * @return index view withthe calculator form
     */
    public function index()
	{
	    return view('index');
    }
	/**
     * Calculate Action; This calculates the 2 numbers based on the operator chosen.
	 * The concrete calculate method is dynamically implemented based on the operator chosen in the calculator form
	 * Dynamic binding isdone in the APpServiceProvider class
	 * @return results of the calcuation and sent to the results view
     */
    public function calculate(Request $request)
	{
    	$validatedData = $request->validate([
	        'number1' => 'bail|required|numeric',
	        'number2' => 'required|numeric',
    	]);
    	$number1 = $request->input('number1');
    	$number2 = $request->input('number2');
    	$results = $this->calculationImplementation->calculate($number1, $number2);
    	$operatorType = $this->calculationImplementation->getOperatorType();
    	$resultDetails = [
    		'results' => $results,
    		'number1' => $number1,
    		'number2' => $number2,
    		'operator' => $operatorType
    	];

    	return view('results',compact("resultDetails"));
    }
}
