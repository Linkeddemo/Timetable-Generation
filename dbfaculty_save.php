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
		//mysql_select_db($data->db, $con);
		$sql="Select Max(fac_id)+1 From table_Faculty";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		if($row[0]=="")
			$facid=1;
		else
			$facid=$row[0];		
		
        $sql = "INSERT INTO table_faculty 		  (fac_id,fac_fname,fac_mname,fac_lname,fac_addr,fac_contact,";
		$sql=$sql."fac_email,fac_pwd,fac_gender,fac_bdate,CMBfacultyedu,fac_special,fac_exper,fac_joindt)"; 										        $sql=$sql.  " VALUES ('". $facid  ."','";
		$sql=$sql . $_POST["txtfacfname"] ;
		$sql = $sql ."','" . $_POST["txtfacmname"] ;
		$sql = $sql ."','" . $_POST["txtfaclname"] ;
		$sql = $sql ."','" . $_POST["txtfacaddr"] ;
		$sql = $sql ."','" . $_POST["txtfaccontact"] ;
		$sql = $sql ."','" . $_POST["txtfacemail"] ;
		$sql = $sql ."','" . $_POST["txtfacpass"] ;
		$sql = $sql ."','" . $_POST["txtfacgender"] ;
		$sql = $sql ."','" . $_POST["txtfacbdate"] ;
		$sql = $sql ."','" . $_POST["CMBfacultyedu"] ;
		$sql = $sql ."','" . $_POST["txtfacspecial"] ;
		$sql = $sql ."','" . $_POST["txtfacexper"] ;
		$sql = $sql ."','" . $_POST["txtfacjdate"] ;
		$sql = $sql . "');";
        if (!mysql_query($sql,$con))
            echo('Error : ' . mysql_error());
        else
               {
				echo "<script language='javascript'>alert('Record saved')</script>";
								
				header("Refresh:0;url=frmfaculty.php");			   
			  }        
    }
    mysql_close($con);
?>