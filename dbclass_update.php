<?php
session_start();
    include( "configuration.php");
	$data = new MyConf();
	
//    $con = mysql_connect($data->host,$data->user,$data->password);

  $con = mysql_connect("localhost","timetablega","timetablega");
    if (!$con)
        echo('Could not connect: ' . mysql_error());
    else
    {
       mysql_select_db("timetablega", $con);
       //mysql_select_db($data->db, $con);
	   $sql = "update table_class set "; 
	   $sql = $sql . "class_no='" . $_POST["txtclassno"]."',";
	   $sql = $sql . "class_cap='" . $_POST["txtclasscap"]."'where class_no='" . $_POST["txtclassno"]."'"; 				
	   			
        if (!mysql_query($sql,$con))
            echo('Error : ' . mysql_error());
     
            else
              {
				echo "<script language='javascript'>alert('Record saved')</script>";
								
				header("Refresh:0;url=frmclassupdate.php");			   
			  }               
    }
    mysql_close($con);
?>