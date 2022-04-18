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
	   //       mysql_select_db($data->db, $con);
	
       $sql = "SELECT * FROM table_timeslot";
			$result=mysql_query($sql); 
			echo "<h1 align='center'> Timeslot Information </h1>";
			echo "<table align='center' border='1'>";
			echo "<tr>  <td> Time no. </td>";
			echo "<td> Timeslot </td>" ;
			echo "</tr>";
		while($row =mysql_fetch_array($result, MYSQL_NUM))
	{
			echo "<tr>";
			echo "<td>" .$row[0]."</td>";
			echo "<td>" .$row[1]."</td>";
		
		echo "</tr>" ;
	
}
echo"</table>";
}
?>	

