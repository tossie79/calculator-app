@extends('layouts.master')
@section('title')
Calculator App
@endsection
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-4">
        <h1>Calculator App Results</h1>
            <h2>
                {{$resultDetails['number1']}}
                {{$resultDetails['operator']}}
                {{$resultDetails['number2']}}
                =
                {{round($resultDetails['results'],2)}}
            </h2>
            <a type="button"  class='btn btn-primary' href="{{route('index')}}" title="Click to Go Back">Click To Go Back To Calculator Page</a>
    </div>
</div>
@endsection