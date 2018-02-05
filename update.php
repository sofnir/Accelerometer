<?php
	require_once "connect.php";
    $connection = @new mysqli($host,$db_user,$db_password,$db_name);
	
    if($connection->connect_errno!=0)
    {
		$value = 0;
    }
    else
    {      
		$value = Array();
	  
		$name[0] = "x";
		$name[1] = "y";      
	  
	  for ($i = 0; $i < 2; $i++) 
	  {
		  $sql = "SELECT * FROM parameters WHERE name='".$name[$i] ."'";
		  if($result = @$connection->query($sql))
		 {
			 $row = $result->fetch_assoc();
			 $value[$i] = $row['value'];
		 	 $result->free_result();
		 }
	  }
	  
	  $connection->close();
    }

    echo "".$value[0].",".$value[1]."";
?>
