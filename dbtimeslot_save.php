<?php
 session_start();
    include( "configuration.php");
	$data = new MyConf();
	
   // $con = mysql_connect($data->host,$data->user,$data->password);

    $con = mysql_connect("localhost","timetablega","timetablega");
    if (!$con)
        echo('Could not connect: ' . mysql_error());
    else
    {
        mysql_select_db("timetablega", $con);
		//          mysql_select_db($data->db, $con);

		$sql="Select Max(time_no)+1 From table_timeslot";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		if($row[0]=="")
			$timeno=1;
		else
			$timeno=$row[0];
		
        $sql = "INSERT INTO table_timeslot (time_no,time_timeslot) VALUES ('" . $timeno ;
		$sql = $sql ."','" . $_POST["txttimeslot"] . "');";
        if (!mysql_query($sql,$con))
            echo('Error : ' . mysql_error());
        else
               {
				echo "<script language='javascript'>alert('Record saved')</script>";
								
				header("Refresh:0;url=frmtimeslot.php");			   
			  }        
    }
    mysql_close($con);
?>