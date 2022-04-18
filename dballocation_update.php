<?php
session_start();
    include( "configuration.php");
	$data = new MyConf();
	
    //$con = mysql_connect($data->host,$data->user,$data->password);
  
    $con = mysql_connect("localhost","timetablega","timetablega");
    if (!$con)
        echo('Could not connect: ' . mysql_error());
    else
    {
        mysql_select_db("timetablega", $con);
       // mysql_select_db($data->db, $con);
		$sql= "Update table_alloc set ";
		$sql = $sql . "alloc_fname='". $_POST["CMBFaculty"] ."',";
		$sql = $sql . "alloc_sub1=' " .$_POST["CMBSubject1"]."',";
		$sql = $sql . "alloc_sub2=' " . $_POST["CMBSubject2"]."' where alloc_id='" . $_POST["CMBallocid"]."'";

        if (!mysql_query($sql,$con))
            echo('Error : ' . mysql_error());
        else
            {
				echo "<script language='javascript'>alert('Record saved')</script>";
								
				header("Refresh:0;url=frmAlloctionupdate.php");			   
			  }        
    }
    mysql_close($con);
?>