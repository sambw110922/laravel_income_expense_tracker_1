

<!--	Selects all Expenses if any.	-->
<div id="SelectAllExpensesComponent">
	<table>
		<tr class="myTableHeads">
			<th>Expense Name</th>
			<th>Expense value</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		@foreach(json_decode($results, true) as $result)
			<tr>
				<td>{{ $result["expense_name"] }}</td>
				<td>{{ $result["expense_value"] }}</td>
				<td>
					<a href="/editexpenseform/{{ $result['expenseID'] }}">
						Edit
					</a>
				</td>
				<td>
					<a href="/deleteexpense/{{ $result['expenseID'] }}">
						Delete
					</a>
				</td>
			</tr>
		@endforeach
	</table>

</div>
