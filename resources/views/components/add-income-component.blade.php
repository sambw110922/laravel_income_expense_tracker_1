
<!--	Adds an income here.	-->
<div id="addAnIncome">

	<h3>Add an income.</h3>
	
	<!--	FORM	-->
	<form name="frmIncome" action="/addincome" method="POST">
	
		@csrf
		
		
		<!--	INCOME NAME	-->
		<div>
			<label for="txtIncomeName">
				Income name:
			</label>
			<input type="text" name="txtIncomeName" required />
		</div>
		<!--	END INCOME NAME	-->

		
		<!--	INCOME AMMOUNT		-->
		<div>
			<label for="txtAmmount">
				Ammount:
			</label>
			<input type="number" name="txtAmmount" required />
		</div>
		<!--	END INCOME AMMOUNT	-->
			
		<!--	CHECKBOX	-->
		<div>
		
			<label for="chkIsOneOff">
				Is One Off:
			</label>
			<input type="checkbox" id="chkIsOneOff" name="chkIsOneOff" value="isOneOff" />
		
		<!--	Regularity drop down component	-->	
		<x:regularity-dropdown-component />
			
		</div>
		<!--	END CHECKBOX	-->
			
		<!--	CONTROLS	-->
		<div>
			<input type="reset" value="RESET" />
			<input type="submit" value="SUBMIT" />
		</div>
		<!--	END CONTROLS	-->
		
	</form>
	<!--	ENDFORM	-->
		
</div>
