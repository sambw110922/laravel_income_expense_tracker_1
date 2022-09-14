<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

	
        <title>{{ config("app.name") }}</title>
        
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />


	<link href="{{ asset('css/mainstyle.css') }}" rel="stylesheet" />

    </head>
    <body class="bg-blue-200">
    	
    	@include("layouts.navigation")
    	
	<x:mainpagecontents />

	@include("layouts.footer")
	
    </body>
</html>
