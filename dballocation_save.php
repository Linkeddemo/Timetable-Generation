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
		//mysql_select_db($data->db, $con);
		// Code To generate Auto Number
		
		$sql="Select Max(alloc_id)+1 From table_alloc";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		if($row[0]=="")
			$allocid=1;
		else
			$allocid=$row[0];
		
        $sql = "INSERT INTO table_alloc (alloc_id,alloc_fname,alloc_sub1,alloc_sub2) VALUES ('" . $allocid ;
		$sql = $sql ."','" . $_POST["CMBFaculty"] ;
		$sql = $sql ."','" . $_POST["CMBSubject1"] ;
		$sql = $sql ."','" . $_POST["CMBSubject2"] ;
		$sql = $sql . "');";

        if (!mysql_query($sql,$con))
            echo('Error : ' . mysql_error());
        else
               {
				echo "<script language='javascript'>alert('Record saved')</script>";
								
				header("Refresh:0;url=frmallocation.php");			   
			  }       
    }
    mysql_close($con);
?>