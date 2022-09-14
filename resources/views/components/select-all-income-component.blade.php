
<!--	Selects all incomes if any.	-->
<div id="SelectAllIncomesComponent">
	<table>
		<tr class="myTableHeads">
			<th>Income Name</th>
			<th>Income value</th>
			<th>Income Regulairty</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		@foreach(json_decode($results, true) as $result)
			<tr>
				<td>{{ $result["income_name"] }}</td>
				<td>{{ $result["income_value"] }}</td>
				
				<!--	Income regularity	-->
				<td>
					<x:income-regularity-viewer-component :incomeid="$result['incomeID']" />
				</td>
				
				<td>
					<a href="/editincomeform/{{ $result['incomeID'] }}">
						Edit
					</a>
				</td>
				<td>
					<a href="/deleteincome/{{ $result['incomeID'] }}">
						Delete
					</a>
				</td>
			</tr>
		@endforeach
	</table>

</div>
