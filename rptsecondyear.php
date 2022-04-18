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
 //mysql_select_db($data->db, $con);

		$sql="";
		
		
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Second year Report</title>
</head>
<div class="title">
				<h1><center> 
				  <p class="style4">Shivkamal D.T.Ed College, Umarkhed</p>
				  </center> </h1>
</div>
<body>
<table width="100%" border="2">
  <tr>
    <td colspan="12"><h2 align="center" >Second Year Timetable</h2></td>
  </tr>
  <tr>
    <td width="9%"><h3>10.50 To 11.10</h3></td>
    <td width="9%"><h3>11.10 to 11.50</h3></td>
    <td width="9%"><h3>11.50 to 12.30</h3></td>
    <td width="6%"><h3>5 minute</h3></td>
    <td width="9%"><h3>12.35 to 1.50</h3></td>
    <td width="9%"><h3> 1.15 To 1.55</h3></td>
    <td width="8%"><h3>30 minute</h3></td>
    <td width="9%"><h3>2.25 to 3.05</h3></td>
    <td width="9%"><h3>3.05 to 3.45</h3></td>
    <td width="6%"><h3>5 minute</h3></td>
    <td width="9%"><h3>3.50 to 4.30</h3></td>
    <td width="10%"><h3>4.30 to 5.10</h3></td>
  </tr>
  <tr>
    <td><h3>Monday</h3></td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='11.10-11.50' And timetable_day='Monday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='11.50-12.30' And timetable_day='Monday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    
    </td>
    <td width="4%" rowspan="14"><p>Short Break</p></td>
    <td>
	<?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='12.35-1.15' And timetable_day='Monday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='1.15-1.55' And timetable_day='Monday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td width="6%" rowspan="10">Long Break</td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='2.25-3.05' And timetable_day='Monday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='3.05-3.45' And timetable_day='Monday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td width="4%" rowspan="10"> Short Break</td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='3.50-4.30' And timetable_day='Monday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='4.30-5.10' And timetable_day='Monday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
  </td>
  </tr>
  <tr>
  <td><h3>Tuesday</h3></td>
     <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='11.10-11.50' And timetable_day='Tuesday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='11.50-12.30' And timetable_day='Tuesday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    
    </td>
   
    <td>
	<?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='12.35-1.15' And timetable_day='Tuesday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='1.15-1.55' And timetable_day='Tuesday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='2.25-3.05' And timetable_day='Tuesday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='3.05-3.45' And timetable_day='Tuesday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='3.50-4.30' And timetable_day='Tuesday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='4.30-5.10' And timetable_day='Tuesday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
  </td>
  </tr>
  <tr>
    <td><h3>Wednesday</h3></td>
    <td>
	<?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='11.10-11.50' And timetable_day='Wednesday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='11.50-12.30' And timetable_day='Wednesday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='12.35-1.15' And timetable_day='Wednesday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='1.15-1.55' And timetable_day='Wednesday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='2.25-3.05' And timetable_day='Wednesday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='3.05-3.45' And timetable_day='Wednesday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='3.50-4.30' And timetable_day='Wednesday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='4.30-5.10' And timetable_day='Wednesday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
  </tr>
  <tr>
    <td><h3>Thursday</h3></td>
    <td>
	<?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='11.10-11.50' And timetable_day='Thursday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='11.50-12.30' And timetable_day='Thursday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='12.35-1.15' And timetable_day='Thursday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='1.15-1.55' And timetable_day='Thursday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='2.25-3.05' And timetable_day='Thursday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='3.05-3.45' And timetable_day='Thursday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='3.50-4.30' And timetable_day='Thursday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='4.30-5.10' And timetable_day='Thursday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
  </tr>
  <tr>
    <td><h3>Friday</h3></td>
    <td>
	<?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='11.10-11.50' And timetable_day='Friday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='11.50-12.30' And timetable_day='Friday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='12.35-1.15' And timetable_day='Friday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='1.15-1.55' And timetable_day='Friday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='2.25-3.05' And timetable_day='Friday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='3.05-3.45' And timetable_day='Friday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='3.50-4.30' And timetable_day='Friday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='4.30-5.10' And timetable_day='Friday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
  </tr>
  </table>
  </br>
  <table width="100%" border="2">
   <tr>
    <td width="9%"><h3>7.50 To 8.10</h3></td>
    <td width="9%"><h3>8.10 to 8.50</h3></td>
    <td width="9%"><h3>8.50 to 9.30</h3></td>
    <td width="6%"><h3>30 minute</h3></td>
    <td width="9%"><h3>10.00 to 10.40</h3></td>
    <td width="9%"><h3> 10.40 To 11.20</h3></td>
 	<td width="9%"><h3> 11.20 To 12.00</h3></td>
  </tr>
  <tr>
    <td><h3>Saturday<h3></td>
     
	
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='8.10-8.50' And timetable_day='Saturday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='8.50-9.30' And timetable_day='Saturday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td width="4%" rowspan="14"><p>Long Break</p></td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='10.00-10.40' And timetable_day='Saturday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td >
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='10.40-11.20' And timetable_day='Saturday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
    <td>
    <?php
    	$sql="Select timetable_subject,timetable_faculty From table_timetable ";
		$sql=$sql." Where timetable_timeslot='11.20-12.00' And timetable_day='Saturday' And timetable_year='Second year'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		echo "".$row[0]."-".$row[1];
		
    ?>
    </td>
  </tr>
</table>
</body>
</html>