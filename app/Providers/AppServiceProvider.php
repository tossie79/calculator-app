<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;

class AppServiceProvider extends ServiceProvider
{
	/**
	* Array of the operators and their service classes
    **/
    protected $operatorClassServices =  [
        'add'=>'AdditionCalculation',
        'subtract'=>'SubtractionCalculation',
        'multiply'=>'MultiplicationCalculation',
        'divide'=>'DivisionCalculation',
        'bitwiseAnd'=>'BitwiseAndCalculation',
        'bitwiseOr'=>'BitwiseOrCalculation'
    ];
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->call([$this, 'registerMyService']);
    }

    /**
     * Dynamically bind a concrete service to the interface based on the operator chosen in the calculator form
     *
     * @return void
     */
    public function registerMyService(Request $request)
    {
        $operator = $request->input('operator');
        $service= (array_key_exists($operator, $this->operatorClassServices)) ? ($this->operatorClassServices[$operator]) : "DefaultCalculation";
        $this->app->bind('App\Repositories\Contracts\CalculationInterface', "App\Repositories\\{$service}");
    }
}
