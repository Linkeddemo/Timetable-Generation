<?php
$con = mysql_connect("localhost","timetablega","timetablega");
if (!$con)
	echo('Could not connect: ' . mysql_error());
		else
			{
				$day="";$tm="";$sub="";$fac="";$loc="";$srno=1;
				//$flg=0;
				mysql_select_db("timetablega", $con);

				$sql="delete From Table_Timetable";
				mysql_query($sql);
				



				$sql="Select sub_name,sub_Thrs From Table_sub where sub_year='First year'";
				$ressub=mysql_query($sql);
				while($rowsub=mysql_fetch_array($ressub))
				{
					$sub=$rowsub[0];
					$thrs=$rowsub[1];
					$yr='First year';
					while($thrs>0)
					{
						//echo "<br>".$sub."   ".$thrs."  ";
						$sql="Select alloc_fname From Table_alloc where alloc_sub1='". $sub ."'";

						$resfac=mysql_query($sql);
						$rowfac=mysql_fetch_array($resfac);
						$fac=$rowfac[0];
						/*if ($yr="First Year")
							$loc="CR-1";
						else*/
							$loc="CR-1";
						$sql="Select day_name From Table_Day ";
						$resday=mysql_query($sql);

						
						
						//while($rowday=mysql_fetch_array($resday))
						{									
							
			
							
							while(1)
							{
							
								$tmno=rand(1,8);
								echo "<br>No=".$tmno;
								$sql="Select time_timeslot From Table_timeslot Where time_no=".$tmno;
								$restm=mysql_query($sql);
								$rowtm=mysql_fetch_row($restm);
								$tm=$rowtm[0];
								
								$dayno=rand(1,6);
								if(($dayno==6)&&($tmno>5))
									continue;
								echo "<br>Day=".$dayno;
								$sql="Select day_Name From table_day Where day_no=".$dayno;	
								$resday=mysql_query($sql);
								$rowday=mysql_fetch_row($resday);														
								$day=$rowday[0];
								
								
								$sql="Select * From Table_timetable where timetable_day='". $day ."'";
								$sql=$sql." And timetable_timeslot='". $tm ."' And timetable_year='".$yr."'";
								echo "<br>".$sql;
								$res=mysql_query($sql);
								if (mysql_num_rows($res)==0)
									break;
								
							}
								

								// Check duplicate Subject 
								$sql="Select timetable_srno From Table_timetable where timetable_day='". $day ."'";
								$sql=$sql." And timetable_subject='". $sub ."' And timetable_year='".$yr."'";
								$resdupsub=mysql_query($sql);
								$rowdupsub=mysql_fetch_array($resdupsub);
								if($rowdupsub=="")
								{
									$sql="Select timetable_srno From Table_timetable where timetable_day='". $day ."'";
									$sql=$sql." And timetable_faculty='". $fac ."' and timetable_subject='". $sub."'";
									$sql=$sql." And timetable_year='". $yr ."'";
									$resdupfac=mysql_query($sql);
									$rowdupfac=mysql_fetch_array($resdupfac);
									if($rowdupfac=="")
									{
										$sql="Select timetable_srno From Table_timetable where timetable_day='". $day ."'";
										$sql=$sql." And timetable_timeslot='". $tm ."' And timetable_year='". $yr ."'";
										$resduptm=mysql_query($sql);
										$rowduptm=mysql_fetch_array($resduptm);
										if($rowduptm=="" && $thrs>0)
										{
											$sql = "INSERT INTO table_timetable VALUES    (".$srno.",'" . $day ;
											$sql = $sql ."','" . $tm ;
											$sql = $sql ."','" . $fac;
											$sql = $sql ."','" . $sub ;
											$sql = $sql . "','". $loc ."','".$yr."');";
				//							echo "<br>".$sql;
											mysql_query($sql);							
											$srno=$srno+1;								
											$thrs=$thrs-1;
										
										}
									}
								}
							
								
							

						}
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
			{
				echo "<script language='javascript'>alert('Timetable is generated')</script>";
				header("Refresh:0;url=rptfirstyear.php");
				}
?>