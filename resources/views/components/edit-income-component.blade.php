
<!--	Edit an income here.	-->
<div id="editAnIncome">

	<h3>Edit an income.</h3>
	
	<!--	FORM	-->
	<form name="frmIncome" action="/editincome" method="post">
	
		@csrf
		
		<input type="hidden" name="txtIncomeid" id="txtIncomeid" value="{{ $incomeid }}"/>
			
		<!--	INCOME NAME	-->
		<div>
			<label for="txtIncomeName">
				Income name:
			</label>
			<input type="text" name="txtIncomeName" value="{{ $incomename }}" required />
		</div>
		<!--	END INCOME NAME	-->
		
		<!--	AMMOUNT	-->
		<div>
			<label for="txtAmmount">
				Ammount:
			</label>
			<input type="number" name="txtAmmount" value="{{ $incomevalue }}" required />
		</div>
		<!--	END AMMOUNT	-->
		
		<!--	CHECKBOX	-->
		<div>
			<label for="chkIsOneOff">
				Is One Off:
			</label>
			<input type="checkbox" id="chkIsOneOff"  name="chkIsOneOff"  value="isOneOff"  />
			
		<!--	Regularity drop down component	-->	
		<x:regularity-dropdown-component />
			
		</div>
		<!--	END CHECKBOX	-->
			

		<!--	CONTROLS	-->
		<div>
			<input type="reset" value="RESET" />
			<input type="submit" value="UPDATE" />
		</div>
		<!--	END CONTROLS	-->
		
	</form>
	<!--	END FORM	-->
	
</div>

