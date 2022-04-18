<?php
session_start();
    include( "configuration.php");
	$data = new MyConf();
	
    $con = mysql_connect($data->host,$data->user,$data->password);

//    $con = mysql_connect("localhost","timetablega","timetablega");
    if (!$con)
        echo('Could not connect: ' . mysql_error());
    else
    {
       // mysql_select_db("timetablega", $con);
                 mysql_select_db($data->db, $con);

	   $sql = "update table_timeslot set "; 
	   $sql = $sql . "time_timeslot='" . $_POST["txttimeslot"]."' where time_no='" . $_POST["txttimeno"]."'"; 				
	   			
        if (!mysql_query($sql,$con))
            echo('Error : ' . mysql_error());
        else
            {
				echo "<script language='javascript'>alert('Record saved')</script>";
								
				header("Refresh:0;url=frmtimeslotupdate.php");			   
			  }        
    }
    mysql_close($con);
?>