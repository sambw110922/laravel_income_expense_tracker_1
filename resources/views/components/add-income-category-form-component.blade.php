
<!--	Adds an income category here.	-->
<div id="addAnIncomeCategoryForm">

	<h3>Add an income category.</h3>
	
	<!--	FORM	-->
	<form name="frmIncomeCategory" action="/addincomecategory" method="POST">
	
		@csrf
		
		<!--	INCOME NAME	-->
		<div>
			<label for="txtIncomeCategoryName">
				Income category name:
			</label>
			<input type="text" name="txtIncomeCategoryName" required />
		</div>
		<!--	END INCOME NAME	-->
			
		<!--	CONTROLS	-->
		<div>
			<input type="reset" value="RESET" />
			<input type="submit" value="SUBMIT" />
		</div>
		<!--	END CONTROLS	-->
		
	</form>
	<!--	ENDFORM	-->
		
</div>
