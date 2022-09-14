<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

	<!--	Fonts	-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,700;0,900;1,900&display=swap" rel="stylesheet"> 

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/mainstyle.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
    </head>
    
    <body>
    
    	@include('layouts.navigation')
    
        <div id="mainContentContainer">

		<x:edit-expense-form-component
			 :expenseid="$expenseid" 
			 :expensename="$expense->expense_name" 
			 :expensevalue="$expense->expense_value" 
			 :regularity="$expense->isOneOff"
		/>
            
        </div>
        
        @include("layouts.footer")
        
    </body>
</html>
