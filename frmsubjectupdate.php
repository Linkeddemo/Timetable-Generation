<?php 
session_start();
    include( "configuration.php");
	$data = new MyConf();
	
	if($_SESSION['usernm']!="admin")
	{
			header("location:frmLogin.html");
	}

    //$con = mysql_connect($data->host,$data->user,$data->password);
	//mysql_select_db($data->db, $con);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Subject update Form</title>
<meta name="keywords" content="wall shelf, free css templates, one page, full site, CSS, HTML" />
<meta name="description" content="Wall Shelf is a free CSS template provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/coda-slider.css" type="text/css" media="screen" title="no title" charset="utf-8" />

<script src="js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>

</head>
<body>

    <div id="slider">

        <div id="header_wrapper">
            <div id="header">
				<a href="http://gr.forwallpaper.com" title="Φύση ταπετσαρία"  class="image_link" target="_blank"><img src="images/image.jpg"  alt="Φύση ταπετσαρία from gr.forwallpaper.com" /></a>
<a href="#home"><h1></h1>
                <h1>Shivkamal D.ed College,Umarkhed</h1>
                </a>             </div>
		</div>

        <div id="menu_wrapper">
            <div id="menu">
                <ul class="navigation">
                    <li><a href="./frmHome.html">Home<span class="ui_icon home"></span></a></li>
                    <li><a href="./frmLogin.html">Login<span class="ui_icon aboutus"></span></a></li>
                    
                    
                    <li><a href="./frmcontactus.html">Contact Us<span class="ui_icon gallery"></span></a></li>
                    <li><a href="#contactus">About us <span class="ui_icon contactus"></span></a></li>
                </ul>
            </div>
		</div>
<form action="dbsubject_update.php" method="post" id="frm_sub" name="frm_sub">
		<div id="content_wrapper">
        <div id="content">
        	<div class="scroll">
                <div class="scrollContainer">
			 <div class="title">
				<h2><center> 
				  <p class="style4"> Update Subject information</p>
				  </center> </h2>
                    <div class="panel" id="home">
                     <table width="800" height="400" style="	border-radius: 10px; 
			box-shadow: 0 0 2px 2px #888; font-family:'Comic Sans MS', 
			cursive;font-size: 14px;">
			<tr>
				<td width="150" height="47" align="right" valign="middle"> Subject code</td>
				<td width="32" align="center" valign="middle">:</td>
				<td colspan="3" align="left" valign="middle">
				<select id="CMBsubcode" name="CMBsubcode"> 
                		<?php
							$con = mysql_connect("localhost","timetablega","timetablega");
								if (!$con)
									echo('Could not connect: ' . mysql_error());
								else
								{
									mysql_select_db("timetablega", $con);
									$sql="Select sub_code From Table_sub ";
									$result=mysql_query($sql);
									while($row=mysql_fetch_array($result,MYSQL_NUM))
									{
										echo "<option value='". $row[0] ."'>".$row[0]."</option>";
									}
								}
								
							?>
						
                        </select>
					
				</td>
			</tr>
            <tr>
				<td height="53" align="right" valign="middle"> Class Year</td>
				<td align="center" valign="middle">:</td>
				<td colspan="3" align="left" valign="middle">
					<input 	name="txtsubyear"  
						id="txtsubyear" 
						size="25" 
						type="List" 
						placeholder=  "Select Year " list="Year" 
						required="required" />
					<datalist id="Year">
						<option value="First Year">
						<option value="Second Year">
					</datalist>
					
				</td>
			</tr>
			
			<tr>
				<td height="51" align="right" valign="middle">Subject name</td>
				<td align="center" valign="middle">:</td>
				<td colspan="3" align="left" valign="middle">
					<input 	name="txtsubname"  
						id="txtsubname" 
						size="50" 
						type="text" 
						placeholder= "Subject name" 
						pattern='[a-zA-Z]{1,50}'  
						required="required" />
					
				</td>
			</tr>
			<tr>
				<td height="45" align="right" valign="middle"> Theory hours</td>
				<td align="center" valign="middle">:</td>
				<td colspan="3" align="left" valign="middle">
					<input 	name="txtsubThrs"  
						id="txtsubThrs" 
						size="25" 
						type="Number" 
						placeholder= "Enter Hours" 
						pattern='[0-9]{6}'  
						required="required" />
					
				</td>
			</tr>
			<tr>
				<td height="57" align="right" valign="middle"> Practical hours</td>
				<td align="center" valign="middle">:</td>
				<td colspan="3" align="left" valign="middle">
					<input 	name="txtsubPhrs"  
						id="txtsubPhrs" 
						size="25" 
						type="Number" 
						placeholder= "Enter Hours" 
						pattern='[0-9]{6}'  
						required="required" />
					
				</td>
			</tr>
			<tr>
				<td align="right" valign="middle"></td>
				<td align="center" valign="middle"></td>
				<td width="94" align="center" valign="middle" >
					<input type="submit" name="cmdSumit" id="cmdSumit" value="Submit"  />
			  </td>
				<td width="200" align="center" valign="middle">
					<input type="reset" name="cmdReset" id="cmdReset" value="Reset" />
				</td>
				<td width="200" height="75" align="left" valign="middle"></td>
			</tr>
			</table>
                	</div>

                </div>
            </div> <!-- end of scroll -->

        </div> <!-- end of content -->
        </div> <!-- end of content_wrapper -->
        <div id="footer">
        	        	Copyright © 2014 <a >Shivkamal D.ed College,Umarkhed </a> | Designed by <a> JJM CSE STUDENT</a>
        </div>

    </div> <!-- end of slider -->


<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js'></script>
<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>
