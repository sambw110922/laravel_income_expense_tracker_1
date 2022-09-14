
<!--	Login or register links -->
<div id="loginRegisterLinks">

	@if(Route::has("login"))
	
		<!--	If user has logged in, print this	-->
		@auth
		
		<div>
			<p>Welcome, {{ Auth::user()->username }} !</p>

			<!--	Logout form	-->
			<form method="POST" action="{{ route('logout') }}">
				
				@csrf
				
				<x-responsive-nav-link id="btnLogout" :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
					{{ __('Log Out') }}
                        	</x-responsive-nav-link>
				
			</form>
			
		</div>
		
	@else
		
		<!--	If user has not logged in, print this	-->
		<div id="loginRegister">
		
			<a href="{{ url('/login') }}">
				Login
			</a>
			
			@if(Route::has("register"))
				<a href="{{ url('/register') }}">
					Register
				</a>
			@endif
			
		</div>
		
		@endauth
		
	@endif
	
</div>

