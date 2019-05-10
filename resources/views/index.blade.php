@extends('layouts.master')
@section('title')
Calculator App
@endsection
@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1>Calculator App</h1>
        @if(count($errors)>0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <p>
                {{$error}}
            </p>
            @endforeach
        </div>
        @endif
        <form method="POST" action="{{route('calculate')}}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="number1">Number 1</label>
                <input type="number" name='number1' class='form-control' id='number1' placeholder="Please enter first number" required="true" min="0" step='any' data-bind="value:number1" />
            </div>
            
            <div class="form-group">
                <label for="operator">Choose Operator</label>
                <select name="operator">
                    <option value="add">Plus</option>
                    <option value="subtract">Minus</option>
                    <option value="multiply">Multiply</option>
                    <option value="divide">Divide</option>
                    <option value="bitwiseAnd">Bitwise And</option>
                    <option value="bitwiseOr">Bitwise Or</option>
                </select>
            </div>
            <div class="form-group">
                <label for="number2">Number 2</label>
                <input type="number" name='number2' class='form-control' id='number2' value='' placeholder="Please enter second number" required="true" min="0" step='any' data-bind="value:number2" />
            </div>
            <button type="submit" class='btn btn-primary'>Calculate</button>
        </form>
    </div>
</div>
@endsection