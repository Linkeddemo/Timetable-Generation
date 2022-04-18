<?php
    $con = mysql_connect("localhost","timetablega","timetablega");
    if (!$con)
        echo('Could not connect: ' . mysql_error());
    else
    {
        mysql_select_db("timetablega", $con);
		
		if($_POST['txtnewpassword']!=$_POST['txtcpassword'])
		{
					echo "<script language='javascript'>alert('Password Mismatch')</script>";
					header("Refresh:0;url=frmpassword.html");			   	
					
		}
		else
		{
        	$sql = "update table_user set user_Password='". $_POST['txtnewpassword'] ."' where user_name='admin'"; 
		
			if (!mysql_query($sql,$con))
				echo('Error : ' . mysql_error());
			else
				{
					echo "<script language='javascript'>alert('Password Changed')</script>";
									
					header("Refresh:0;url=frmlogin.html");			   
				  }         
		}
    }
    mysql_close($con);
?>