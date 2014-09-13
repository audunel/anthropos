<?php

	##### LDAP Functions #####
	
	function search($s)
	{
		global $connection, $DN;

		$filter = "(&(|(uid=*$s*)(cn=*$s*)(mail=*$s*)(telephoneNumber=*$s*))(memberOf=cn=Active,ou=Sections,ou=Org,ou=Groups,dc=studentmediene,dc=no))";
		
		$search = ldap_search($connection, $DN, $filter, array("uid","cn","mail"));

		$result = ldap_get_entries($connection, $search);

		if ($result["count"] == 0)
		{
			return array();
		}

		return array_slice($result, 1);

	}

?>