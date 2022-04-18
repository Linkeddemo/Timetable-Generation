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
       // mysql_select_db($data->db, $con);
		$sql = "update table_faculty set " ;
		$sql = $sql . "fac_fname='". $_POST["txtfacfname"]."',";
		$sql = $sql . "fac_mname='" . $_POST["txtfacmname"]."',";
		$sql = $sql . "fac_lname='" . $_POST["txtfaclname"]."',"; 
		$sql = $sql . "fac_addr='" . $_POST["txtfacaddr"]."',";
		$sql = $sql . "fac_contact='" . $_POST["txtfaccontact"]."',";
		$sql = $sql . "fac_email='" . $_POST["txtfacemail"]."',";
		$sql = $sql . "fac_pwd='" . $_POST["txtfacpass"]."',";
		$sql = $sql . "fac_gender='" . $_POST["txtfacgender"]."',";
		$sql = $sql . "fac_bdate='" . $_POST["txtfacbdate"]."',";
		$sql = $sql . "fac_edu='" . $_POST["CMBfacultyedu"]."',";
		$sql = $sql . "fac_special='" . $_POST["txtfacspecial"]."',";
		$sql = $sql . "fac_exper='" . $_POST["txtfacexper"]."',";
		$sql = $sql . "fac_joindt='" . $_POST["txtfacjdate"]."' where fac_id='" . $_POST["txtfacid"]."'"; 
		
		echo "".$sql;
        if (!mysql_query($sql,$con))
            echo('Error : ' . mysql_error());
        else
            {
				echo "<script language='javascript'>alert('Record saved')</script>";
								
//				header("Refresh:0;url=frmfacultyupdate.php");			   
			  }         
    }
    mysql_close($con);
?>