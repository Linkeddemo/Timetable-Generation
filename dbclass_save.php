<?php
session_start();
    include( "configuration.php");
	$data = new MyConf();
	
  //  $con = mysql_connect($data->host,$data->user,$data->password);
  
   $con = mysql_connect("localhost","timetablega","timetablega");
    if (!$con)
        echo('Could not connect: ' . mysql_error());
    else
    {
        mysql_select_db("timetablega", $con);
       // mysql_select_db($data->db, $con);
		$sql = "INSERT INTO table_class (class_no,class_cap) 
				VALUES ('" . $_POST["CMBclass"] ;
		$sql = $sql ."','" . $_POST["txtclasscap"] . "');";
        if (!mysql_query($sql,$con))
            echo('Error : ' . mysql_error());
        else
           {
				echo "<script language='javascript'>alert('Record saved')</script>";
								
				header("Refresh:0;url=frmclass.php");			   
			  }  
    }
    mysql_close($con);
?>