<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use App\Traits\OperatorTraits;

class AppServiceProvider extends ServiceProvider
{
	/**
	* returns array of the operators and their service classes
    **/
    use OperatorTraits;
   
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
        $this->app->bind('App\Repositories\Contracts\CalculationInterface', "App\Services\\{$service}");
    }
}
