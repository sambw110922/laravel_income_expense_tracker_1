
<!--	Adds an expense here.	-->
<div id="addAnExpense">
	<h3>Add an Expense.</h3>
		
	<!--	FORM START	-->
	<form name="frmAddExpense" action="/addexpense" method="POST">
		@csrf
			
		<!--	START EXPENSE NAME	-->
		<div>
			<label for="txtExpensename">
				Income name:
			</label>
			<input type="text" name="txtExpensename" required />
		</div>
		<!--	END EXPENSE NAME	-->
		
		<!--	START AMMOUNT	-->
		<div>
			<label for="txtAmmount">
				Ammount:
			</label>
			<input type="number" name="txtAmmount" required />
		</div>
		<!--	END AMMOUNT	-->
			
		<!--	START ONE OFF	-->
		<div>
			<label for="chkIsOneOff">
				Is One Off Expense:
			</label>
			<input type="checkbox" id="chkIsOneOff" name="chkIsOneOff"  value="isOneOff" />
				
		<!--	Regularity drop down component	-->	
		<x:regularity-dropdown-component />
			
		</div>
		<!--	END ONE OFF	-->
			
		<!--	FORM CONTROLS	-->
		<div>
			<input type="reset" value="RESET" />
			<input type="submit" value="SUBMIT" />
			</div>
		<!--	END FORM CONTROLS	-->
			
	</form>
	<!--	END FORM	-->

</div>

