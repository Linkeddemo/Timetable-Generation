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
        //mysql_select_db($data->db, $con);
		$fid = explode('-',$_POST["CMBFaculty"]);
		$sql = "delete from table_faculty where fac_id='" . $fid[0]."'"; 
		
		echo "".$sql;
        if (!mysql_query($sql,$con))
            echo('Error : ' . mysql_error());
        else
            {
				
				$sql = "delete from table_alloc where alloc_fname='" . $fid[1]."'"; 
				mysql_query($sql);
				$sql = "delete from table_timetable where timetable_Faculty='" . $fid[1]."'"; 
				mysql_query($sql);
				
				echo "<script language='javascript'>alert('Record removed')</script>";
								
			header("Refresh:0;url=frmfacshowdel.php");			   
			  }         
    }
    mysql_close($con);
?>