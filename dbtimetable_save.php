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
        //         mysql_select_db($data->db, $con);

	   $sql = "INSERT INTO table_timetable(timetable_srno,timetable_Day,timetable_timeslot,timetable_faculty,timetable_Subject,timetable_location,timetable_year) 				
	   			VALUES ('" . $_POST["txtsrno"] ;
		$sql = $sql ."','" . $_POST["CMBDay"] ;
		$sql = $sql ."','" . $_POST["CMBtimeslot"] ;
		$sql = $sql ."','" . $_POST["CMBfacname"]  ;
		$sql = $sql ."','" . $_POST["CMBSubject"]  ;
		$sql = $sql ."','" . $_POST["CMBlocation"]  ;
		$sql = $sql ."','" . $_POST["CMBYear"]  ;
		$sql = $sql . "');";
        if (!mysql_query($sql,$con))
            echo('Error : ' . mysql_error());
        else
           {
				echo "<script language='javascript'>alert('Record saved')</script>";
								
				header("Refresh:0;url=frmtimetable.html");			   
			  }    
    }
    mysql_close($con);
?>