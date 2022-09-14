
<x-guest-layout>

	<div>
		<!--	The main form.	-->
		<form method="POST" action="{{ route('login') }}">
		
			@csrf
			
			<!--	Username	-->
			<div>
				<label for="username">
					Username: 
				</label>
				<input type="text" name="username" id="username" required />
			</div>
			
			<!--	Password	-->
			<div>
				<label for="password">
					Password: 
				</label>
				<input type="password"  name="password" id="password" required equired autocomplete="current-password" />
			</div>
			
			<!--	Controls	-->
			<div>
				<input type="submit" value="LOGIN" />
				<input type="reset" value="RESET" />
				
			</div>
			
			<!--	Error warnings		-->
			<div>
			
			        <!-- Session Status -->
       			<x-auth-session-status class="mb-4" :status="session('status')" />

        			<!-- Validation Errors -->
        			<x-auth-validation-errors class="mb-4" :errors="$errors" />
        			
			</div>
		</form>
	</div>
	
</x-guest-layout>


