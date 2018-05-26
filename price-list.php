
<?include('header.php');
include('/database/connection.php');
?>

	<div class="container-fluid">
		<table class="table">
		  <thead>
		    <tr>
					<th scope="col">#</th>
		      <th scope="col">Наименование услуги</th>
		      <th scope="col">Стоимость</th>
					<th scope="col">Описание</th>
		    </tr>
		  </thead>
		  <tbody>

		  	<?php

			$sql = 'SELECT * FROM price_list';


			foreach($connection->query($sql) as $key=>$row) 
			{
				echo '<th scope="row">'.($key+1).'</th>';
				echo '<td>';
				echo $row['service_name'];
				echo '</td>';

				echo '<td>';
				echo $row['service_cost'];
				echo '</td>';

				echo '<td>';
				echo $row['service_description'];
				echo '</td>';

				echo '</tr>';	
			}
			?>
		  </tbody>
		</table>
	</div>


 <? include('footer.php')?>
		