<?php
	if ($search = getSearch())
	{
		$result = search($search);
	?>
	<table>
		<tr>
			<th>Name</th>
			<th>Username</th>		
			<th>Email</th>
			<th>Link</th>
		</tr>
	<?php
		foreach ($result as $person) {
			echo 
			"<tr>
				<td>" . $person["cn"][0] . "</td>
				<td>" . $person["uid"][0] . "</td>
				<td>" . $person["mail"][0] . "</td>
				<td><a href=index.php?uid=" . $person["uid"][0] . ">---></a></td>
			</tr>";
		}
		echo "</table>";
	}
?>