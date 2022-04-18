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
  //               mysql_select_db($data->db, $con);

	   $sql = "update table_sub set    "; 
	   $sql = $sql . "sub_year='" . $_POST["txtsubyear"]."',";
	   $sql = $sql . "sub_name='" . $_POST["txtsubname"]."',";
	   $sql = $sql . "sub_Thrs='" . $_POST["txtsubThrs"]."',";
	   $sql = $sql . "sub_Phrs='" . $_POST["txtsubPhrs"]."' where sub_code='" . $_POST["CMBsubcode"]."'"; 				
	   			
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