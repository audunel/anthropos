<?php
	
	##### Display Functions #####
	
	function getCurrentPage()
	{
		if (isset($_GET["p"]))
		{
			return htmlspecialchars($_GET["p"]);
		}
		
		return null;
	}

	function getSearch()
	{
		if (isset($_GET["s"]))
		{
			return htmlspecialchars($_GET["s"]);
		}
		
		return null;
	}
	
?>