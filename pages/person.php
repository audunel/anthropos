<?php
	
	require_once("include/header.php");

	if(isLoggedIn())
	{

		if ($uid = getPersonUID())
		{
			$person = getPerson($uid)[0];

			if (sizeof($person) > 0)
			{

				echo "<br />";
				echo $person["uid"][0];
				echo "<br />";
				echo $person["cn"][0];
				echo "<br />";
				echo $person["mail"][0];
				echo "<br />";
				echo $person["telephonenumber"][0];
				echo "<br />";
				foreach ($person["memberof"] as $group)
				{
					if (!strpos($group, "email") && !strpos($group, "first semester"))
					{
						echo $group;
						echo "<br />";
					}
				}

			}
		}
	}

	require_once("include/footer.php");

?>