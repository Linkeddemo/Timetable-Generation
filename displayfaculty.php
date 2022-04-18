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
//          mysql_select_db($data->db, $con);

$sql = "SELECT * FROM table_faculty";
$result=mysql_query($sql); 
echo "<h1 align='center'> Faculty Information </h1>";
echo "<table align='center' border='1'>";
echo "<tr>  <td> fname </td>";
			echo "<td> mname </td>" ;
			echo"<td> lname </td>";
			echo"<td> addr </td>";
			echo"<td> contact </td>";
			echo"<td> email </td>";
			echo"<td> pwd </td>";
			echo"<td> gender </td>";
			echo"<td> bdate </td>";
			echo"<td> CMBfacultyedu </td>";
			echo"<td> special </td>";
			echo"<td> exper </td>";
			echo"<td> joindt</td> ";
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
	echo "<td>" .$row[7]."</td>";
	echo "<td>" .$row[8]."</td>";
	echo "<td>" .$row[9]."</td>";
	echo "<td>" .$row[10]."</td>";
	echo "<td>" .$row[11]."</td>";
	echo "<td>" .$row[12]."</td>"; 
	echo "</tr>" ;
	
}
echo"</table>";
}
?>