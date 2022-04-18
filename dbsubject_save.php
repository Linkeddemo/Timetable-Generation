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
             //    mysql_select_db($data->db, $con);

	   $sql = "INSERT INTO table_sub(sub_year,sub_code,sub_name,sub_Thrs,sub_Phrs) 				
	   			VALUES ('" . $_POST["txtsubyear"] ;
		$sql = $sql ."','" . $_POST["txtsubcode"] ;
		$sql = $sql ."','" . $_POST["txtsubname"]  ;
		$sql = $sql ."','" . $_POST["txtsubThrs"]  ;
		$sql = $sql ."','" . $_POST["txtsubPhrs"]  ;
		$sql = $sql . "');";
        if (!mysql_query($sql,$con))
            echo('Error : ' . mysql_error());
        else
              {
				echo "<script language='javascript'>alert('Record saved')</script>";
								
				header("Refresh:0;url=frmsubject.php");			   
			  }        
    }
    mysql_close($con);
?>