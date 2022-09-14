
<!--	Income category viewer component	-->
<div id="incomeCategoryViewer">
	
	<h3>This will be where the income category viewer will go.</h3>
	
	<!--	The data table		-->
	<table>
	
		<tr>
			<th>
				Income Category Name
			</th>
			
			<th>
				Edit
			</th>
			
			<th>
				Delete
			</th>
		</tr>
		
		@foreach ($incomeCategories as $incat)
			
			<x:single-income-category-view-component 
				:incatID="$incat->id"
				:incatName="$incat->category_name"
			/>	
			
		@endforeach 
		
	</table>	
	
</div>
