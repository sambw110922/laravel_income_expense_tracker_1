

<!--	Edit an expense here.	-->
<div id="editAnExpense">

	<h3>Edit an expense.</h3>
	
	<!--	FORM	-->
	<form name="frmExpense" action="/editexpense" method="post">
	
		@csrf
		
		<input type="hidden" name="txtExpenseid" id="txtExpenseid" value="{{ $expenseid }}"/>
			
		<!--	EXPENSE NAME	-->
		<div>
			<label for="txtExpenseName">
				Expense name:
			</label>
			<input type="text" name="txtExpenseName" value="{{ $expense_name }}" required />
		</div>
		<!--	END EXPENSE NAME	-->
		
		<!--	AMMOUNT	-->
		<div>
			<label for="txtAmmount">
				Ammount:
			</label>
			<input type="number" name="txtAmmount" value="{{ $expense_value }}" required />
		</div>
		<!--	END AMMOUNT	-->
		
		<!--	CHECKBOX	-->
		<div>
			<label for="chkIsOneOff">
				Is One Off:
			</label>
			<input type="checkbox" id="chkIsOneOff" value="{{ $regularity }}" name="chkIsOneOff"  value="isOneOff"  />
			
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

