<?php
session_start();
    include( "configuration.php");
	$data = new MyConf();
	
    $con = mysql_connect($data->host,$data->user,$data->password);

//$con = mysql_connect("localhost","root","");
if (!$con)
	echo('Could not connect: ' . mysql_error());
		else
			{
				$day="";$tm="";$sub="";$fac="";$loc="";$srno=1;
				//$flg=0;
					$i=0;
				$totthr=0;
				//mysql_select_db("timetablega", $con);
				
					mysql_select_db($data->db, $con);
								
				$sql="Select sub_name,sub_Thrs From Table_sub where sub_year='Second year'";
				$ressub=mysql_query($sql);
				while($rowsub=mysql_fetch_array($ressub))
				{
					$sub=$rowsub[0];
					$thrs=$rowsub[1];
					$yr='Second year';
					$i=1;
					while($thrs>0 && $i<=6)
					{
						//echo "<br>".$sub."   ".$thrs."  ";
						$sql="Select alloc_fname From Table_alloc where alloc_sub1='". $sub ."'";

						$resfac=mysql_query($sql);
						$rowfac=mysql_fetch_array($resfac);
						$fac=$rowfac[0];
						
							$loc="CR-2";
															
							while(1)
							{
								$tmno=rand(1,8);
						//		echo "<br>No=".$tmno;
								$sql="Select time_timeslot From Table_timeslot Where time_no=".$tmno;
								$restm=mysql_query($sql);
								$rowtm=mysql_fetch_row($restm);
								$tm=$rowtm[0];
								
								$dayno=rand(1,6);
								if(($dayno==6)&&($tmno>5))
									continue;
							//	echo "  <<---->>  Day=".$dayno;
								$sql="Select day_Name From table_day Where day_no=".$dayno;	
								$resday=mysql_query($sql);
								$rowday=mysql_fetch_row($resday);														
								$day=$rowday[0];
								
								$sql="Select * From Table_timetable where timetable_day='". $day ."'";
								$sql=$sql." And timetable_timeslot='". $tm ."' And timetable_year='".$yr."'";
							//	echo "<br>".$sql;
								$res=mysql_query($sql);
								if (mysql_num_rows($res)==0)
									break;
								
							}
							
							
						
							
							

								// Check Duplicate Subject Entry On Same Day For that year
								$sql="Select timetable_srno From Table_timetable Where timetable_day='". $day ."'";
								$sql=$sql." And timetable_Subject='". $sub ."' And timetable_year='". $yr ."'";
								//echo "<Br>Qry=> ".$sql;								
								$dupres=mysql_query($sql);
								$duprow=mysql_fetch_row($dupres);
								if($duprow[0]!="")
									continue;
								
									
									
							
								// Check Availability Of Faculty on That Date And Time Slot
								$sql="Select timetable_srno From Table_timetable Where timetable_day='". $day ."'";
								$sql=$sql." And timetable_Faculty='". $fac ."' And timetable_timeslot='". $tm ."'";
								//echo "<Br>Qry=> ".$sql;								
								$dupres=mysql_query($sql);
								$duprow=mysql_fetch_row($dupres);
								if($duprow[0]!="")
									continue;
								
								
									
									
								if($thrs>0)	
								{
									$sql = "INSERT INTO table_timetable VALUES    (".$srno.",'" . $day ;
									$sql = $sql ."','" . $tm ;
									$sql = $sql ."','" . $fac;
									$sql = $sql ."','" . $sub ;
									$sql = $sql . "','". $loc ."','".$yr."');";
									//echo "<br>".$sql;
									mysql_query($sql);							
									$srno=$srno+1;								
									$thrs=$thrs-1;
									$i=$i+1;	
								}
								
							
							
						
					}
				}
					
					
				// Code To Search Remaining 3 Slots	 
				$s1="";
				$i=0;
				$sql="Select day_name From Table_day";
				$res=mysql_query($sql);
				while($row=mysql_fetch_row($res))
				{
					$sql1="Select time_timeslot from table_timeslot";
					$res1=mysql_query($sql1);
					while($row1=mysql_fetch_row($res1))
					{
						$sql2="select * From table_timetable Where timetable_day='". $row[0] ."' And timetable_timeslot='". $row1[0];
						$sql2=$sql2  . "' And timetable_year='Second Year'";
						$res2=mysql_query($sql2);
						$row2=mysql_fetch_row($res2);
						if($row2[0]=="")
						{
							if($i>2)
								break;
							$s1=$s1.$row[0]."=".$row1[0]."~";
							$i++;
							
						}
					}
				}
				
				echo "<br>".$s1;

				// Code To Search Remaining Subjects And Hrs 
				$s2="";
				$i=0;
				$sql="Select sub_Name,sub_Thrs From Table_sub Where sub_Year='Second Year'";
				$res=mysql_query($sql);
				while($row=mysql_fetch_row($res))
				{
						$tcnt=$row[1];
						$sql2="select Count(*) From table_timetable Where timetable_subject='". $row[0] ;
						$sql2=$sql2  . "' And timetable_year='Second Year'";
						$res2=mysql_query($sql2);
						$row2=mysql_fetch_row($res2);
						$cnt=$row2[0];
						if($cnt<$tcnt)
						{
							$s2=$s2.$row[0]."=".($tcnt-$cnt)."~";
						}
						
					
				}
								
				
				
				
				
				echo "<br>".$s2;
				
				// Code To insert Those Subject in That Time Slots
				
				$subjects=explode('~',$s2);
				/*
				$sub[0]="English";//explode('=',$subjects[0])[0];
				$sub[1]="Science";//explode('=',$subjects[1])[0];
				$sub[2]="Science";//explode('=',$subjects[2])[0];
				*/
				
				
				
				
				
				$daytimeslots=explode('~',$s1);
				for($i=0;$i<3;$i++)
				{
					if($i==0)
						$sub="English";
					else
						$sub="Science";
						
					$day1=explode('=',$daytimeslots[$i]);
					//$tm1=explode('=',$daytimeslots[$i]);
					$day=$day1[0];
					$tm=$day1[1];
					
					$sql="Select alloc_fname From Table_Alloc Where Alloc_Sub1='". $sub."'";
					$sql=$sql." And alloc_fname Not In (";
					$sql=$sql." Select timetable_faculty From table_timetable Where timetable_timeslot='".$tm."' And Timetable_day='". $day ."')";
					echo "<br>".$sql;
					$res=mysql_query($sql);
					$row=mysql_fetch_row($res);
					if($row[0]!="")
					{
						$sql = "INSERT INTO table_timetable VALUES    (".$srno.",'" . $day ;
						$sql = $sql ."','" . $tm ;
						$sql = $sql ."','" . $row[0];
						$sql = $sql ."','" . $sub ;
						$sql = $sql . "','". $loc ."','".$yr."');";
						echo "<br>".$sql;
						mysql_query($sql);
						$srno++;		
					}
					else
					{
					/*
						$sql="Select alloc_fname From Table_Alloc Where Alloc_Sub2='". $sub."'";
						$sql=$sql." And alloc_fname Not In (";
						$sql=$sql." Select timetable_faculty From table_timetable Where timetable_timeslot='".$tm."' And Timetable_day='". $day ."')";
						echo "<br>".$sql;
						$res=mysql_query($sql);
						$row=mysql_fetch_row($res);
						if($row[0]!="")
						{
							$sql = "INSERT INTO table_timetable VALUES    (".$srno.",'" . $day ;
							$sql = $sql ."','" . $tm ;
							$sql = $sql ."','" . $row[0];
							$sql = $sql ."','" . $sub ;
							$sql = $sql . "','". $loc ."','".$yr."');";
							echo "<br>".$sql;
							mysql_query($sql);
							$srno++;		
						}
						
						*/
					}					
					
				}
				
				
			
				
				
			$sql =" Update table_timetable set timetable_timeslot = '8.10-8.50' where timetable_day = 'Saturday' and timetable_timeslot = '11.10-11.50' ";
				mysql_query($sql);
				$sql =" Update table_timetable set timetable_timeslot = '8.50-9.30' where timetable_day = 'Saturday' and timetable_timeslot = '11.50-12.30' ";
				mysql_query($sql);
				$sql =" Update table_timetable set timetable_timeslot = '10.00-10.40' where timetable_day = 'Saturday' and timetable_timeslot = '12.35-1.15' ";
				mysql_query($sql);
				$sql =" Update table_timetable set timetable_timeslot = '10.40-11.20' where timetable_day = 'Saturday' and timetable_timeslot = '1.15-1.55' ";
				mysql_query($sql);
				$sql =" Update table_timetable set timetable_timeslot = '11.20-12.00' where timetable_day = 'Saturday' and timetable_timeslot = '2.25-3.05' ";
				mysql_query($sql);
				
				
				
				
					
								
			}
?>