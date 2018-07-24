<?php
error_reporting(1);
	function ExecuteQuery ($SQL)
	{	
		$con=mysqli_connect ("localhost", "root","","tech_forum");
		//mysql_select_db ("tech_forum",$con);
		if($con==false)
		{
			die("Could Not able to connect".mysqli_connect_error());

		}
		
		$rows = mysqli_query ($con,$SQL);
		if(mysqli_num_rows($rows)==1)
			{die("shujha".mysqli_connect_error());}
		mysqli_close ($con);
		
		return $rows;
	}
	
	function ExecuteNonQuery ($SQL)
	{
		$con=mysql_connect ("localhost", "root","");
		mysql_select_db ("tech_forum",$con);
		
		$result = mysql_query ($SQL);
		
		mysql_close ();
		
		return $result;
	}
?>