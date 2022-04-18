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
  //        mysql_select_db($data->db, $con);
       	$user=$_POST["txtlogid"];
		$pwd=$_POST["txtlogpass"];
		
		

		if(($user=="Student")&&($pwd=="Student"))
		{
					$_SESSION['user']="student";
					$_SESSION['usernm']="student";
			
				echo "<script language='javascript'>alert('Login Successful')</script>";
				header("Refresh:0;url=frmstudent.html");			

		}
		else
		{
			
				$sql="Select * From table_faculty Where fac_email='". $user ."'  And fac_pwd='". $pwd ."'";
				$res=mysql_query($sql);
				$row=mysql_fetch_row($res);
				if($row[0]!="")
				{
					$_SESSION['user']=$user;
					$_SESSION['usernm']=$row[1]." ".$row[2]." ".$row[3];
					echo "<script language='javascript'>alert('Login Successful')</script>";
					header("Refresh:0;url=frmfacultyhomepage.html");											
				}
				else
				{
					$sql="Select * From table_user Where user_name='". $user ."'  And user_password='". $pwd ."'";
					$res=mysql_query($sql);
					$row=mysql_fetch_row($res);					
					if($row[0]!="")
					{
						$_SESSION['user']=$user;
						$_SESSION['usernm']=$user;
						
						echo "<script language='javascript'>alert('Login Successful')</script>";
						header("Refresh:0;url=frmgeneratetable.php");			
					}
					else
					{
						echo "<script language='javascript'>alert('Invalid Login')</script>";
						header("Refresh:0;url=frmLogin.html");
					}
				}
		}
        
    }
    mysql_close($con);
?>