<?php
    $con = mysql_connect("localhost","timetablega","timetablega");
    if (!$con)
        echo('Could not connect: ' . mysql_error());
    else
    {
        mysql_select_db("timetablega", $con);
			$subname=explode("-",$_POST["CMBSubject"]);
			//echo $subname[0];
		
       		$sql = "SELECT * FROM table_timetable where timetable_subject = '".$subname[1]."'";
			$result=mysql_query($sql); 
			echo "<h1 align='center'> Timetable </h1>";
			echo "<table align='center' border='2' width='80%'>";
			echo "<tr>  <td> Sr.No. </td>";
			echo "<td> Day </td>" ;
			echo "<td> Time slots </td>" ;
			echo "<td> Faculty </td>" ;
			echo "<td> Subject name </td>" ;
			echo "<td> Location </td>" ;
			echo "<td> Year </td>" ;
			echo "</tr>";
		while($row =mysql_fetch_array($result, MYSQL_NUM))
	{
			echo "<tr>";
			echo "<td>" .$row[0]."</td>";
			echo "<td>" .$row[1]."</td>";
			echo "<td>" .$row[2]."</td>";
			echo "<td>" .$row[3]."</td>";
			echo "<td>" .$row[4]."</td>";
			echo "<td>" .$row[5]."</td>";
			echo "<td>" .$row[6]."</td>";
			
		
		echo "</tr>" ;
	
}
echo"</table>";
}
?>	
      