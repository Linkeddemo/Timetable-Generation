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
		//          mysql_select_db($data->db, $con);

       $sql = "SELECT * FROM table_sub";
			$result=mysql_query($sql); 
			echo "<h1 align='center'> Subject Information </h1>";
			echo "<table align='center' border='2' width='80%'>";
			echo "<tr>  <td> Subject year </td>";
			echo "<td> Subject code </td>" ;
			echo "<td> Subject name </td>" ;
			echo "<td> Theory hrs </td>" ;
			echo "<td> Practical hrs </td>" ;
			echo "</tr>";
		while($row =mysql_fetch_array($result, MYSQL_NUM))
	{
			echo "<tr>";
			echo "<td>" .$row[0]."</td>";
			echo "<td>" .$row[1]."</td>";
			echo "<td>" .$row[2]."</td>";
			echo "<td>" .$row[3]."</td>";
			echo "<td>" .$row[4]."</td>";
			
		
		echo "</tr>" ;
	
}
echo"</table>";
}
?>	
      