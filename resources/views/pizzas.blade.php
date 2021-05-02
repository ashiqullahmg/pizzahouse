@extends('layouts.layout')

@section('content')
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            <div class="">
                <div class="flex justify-center">
                   <h1 style="text-transform: uppercase;
	border-bottom: 2px solid; font-weight: normal; font-size: 50px;">Pizza List</h1>
                   
                </div>
               
            @foreach($pizzas as $pizza)
                <div>
                {{$pizza->name}} - {{$pizza->type}} - {{$pizza->base}}
                </div>
            @endforeach
            </div>
        </div>
@endsection
