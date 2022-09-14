
<!--	The real navigation.	-->
<nav>

	<div>
		@if(Auth::check())
		<a href="/dashboard">
			<h1>{{ config("app.name") }}</h1>
		</a>
		@else 
		<a href="/">
			<h1>{{ config("app.name") }}</h1>
		</a>
		@endif
	</div>
	
	<x:loginbuttons/>
	
</nav>

