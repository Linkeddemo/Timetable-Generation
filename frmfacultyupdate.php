
<?php
session_start();
    include( "configuration.php");
	$data = new MyConf();
	if($_SESSION['usernm']!="admin")
	{
			header("location:frmLogin.html");
	}
	
    //$con = mysql_connect($data->host,$data->user,$data->password);
	
 $con = mysql_connect("localhost","timetablega","timetablega");
    if (!$con)
        echo('Could not connect: ' . mysql_error());
    else
    {
     mysql_select_db("timetablega", $con);
//	mysql_select_db($data->db, $con);
	
		$facid=explode('-',$_POST["CMBFaculty"]);
		$sql="Select * From table_Faculty Where fac_Id='". $facid[0] ."'";
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>faculty update form</title>
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
                <h1>Shivkamal D.T.Ed College,Umarkhed</h1>
                </a>             </div>
		</div>

        <div id="menu_wrapper">
            <div id="menu">
                <ul class="navigation">
                    <li><a href="./frmHome.html">Home<span class="ui_icon home"></span></a></li>
                    <li><a href="./frmLogin.html">Login<span class="ui_icon aboutus"></span></a></li>
                    <li><a href="./frmcontactus.html">Contact Us<span class="ui_icon gallery"></span></a></li>
                    <li><a href="./frmaboutus.html">About us <span class="ui_icon contactus"></span></a></li>
                </ul>
            </div>
		</div>
<form = action="dbfaculty_update.php" method="post" id="frm_fac" name="frm_fac">
		<div id="content_wrapper">
        <div id="content">
        	
			  <div class="title">
				<h2><center> 
				  <p class="style4">&nbsp; </p>
				  <p class="style4">Update Faculty Details</p>
				</center> </h2>
                    <div class="panel" id="home">
                     <table width="800" height="300" style="	border-radius: 10px; 
			box-shadow: 0 0 2px 2px #888; font-family:'Comic Sans MS', 
			cursive;font-size: 14px;">
			<tr>
                <td width="131" align="right" valign="middle">Faculty Id</td>
				<td width="32" align="center" valign="middle">:</td>
				<td colspan="3" align="left" valign="middle">
                 <input 	name="txtfacid" 
						type="text"   
						id="txtfacid" 
						size="25"  
						value="<?php
                        			echo $row[0];	 
                        ?>"
						required="required"/>
                <tr>
				<td width="131" align="right" valign="middle">Faculty Name</td>
				<td width="32" align="center" valign="middle">:</td>
				<td colspan="3" align="left" valign="middle">
					    <input 	name="txtfacfname" 
						type="text"   
						id="txtfacfname" 
						size="25" 
						placeholder="First name" 
						value="<?php
                        			echo $row[1];	 
                        ?>"
						required="required"/>
		
        			    <input 	name="txtfacmname"  
						id="txtfacmname" 
						size="25" 
						type="text" 
						placeholder="Middle name" 

						value="<?php
                        			echo $row[2];	 
                        ?>"
						required="required" />
					    <input 	name="txtfaclname"  
						id="txtfaclname" 
						size="25" 
						type="text" 
						placeholder= "Last name" 
						value="<?php
                        			echo $row[3];	 
                        ?>"  
						required="required" />
				  </td>
			</tr>
			<tr>
				<td align="right" valign="middle">Address</td>
				<td align="center" valign="middle">:</td>
				<td colspan="3" align="left" valign="middle">
					 <input name="txtfacaddr" 
					 size="25"  
					 id="txtfacaddr" 
					 placeholder="Address" 
					 	value="<?php
                        			echo $row[4];	 
                        ?>"
					 required="required" />
					 
		      </td>
			</tr>
			<tr>
				<td align="right" valign="middle">Contact Details</td>
				<td align="center" valign="middle">:</td>
				<td colspan="3" align="left" valign="middle">
					    <input 	name="txtfaccontact" 
						size="25"  
						id="txtfaccontact" 
						type='text' 
                        pattern="[0-9]{10}"
							value="<?php
                        			echo $row[5];	 
                        ?>"  
						required="required"/>
				  </td>
			</tr>
             <tr>
				<td align="right" valign="middle">Email Address</td>
				<td align="center" valign="middle">:</td>
				<td colspan="3" align="left" valign="middle">			
					   <input name="txtfacemail"  
						id="txtfacemail" 
						size="50" 
						type="email" 
						placeholder= "Email Address ... " 
							value="<?php
                        			echo $row[6];	 
                        ?>"    />
				  </td>
			</tr>
            <tr>
				<td height="59" align="right" valign="middle"> Password</td>
				<td align="center" valign="middle">:</td>
				<td colspan="3" align="left" valign="middle">
					<input 	name="txtfacpass"  
						id="txtfacpass" 
						size="25" 
						type="text" 
							value="<?php
                        			echo $row[7];	 
                        ?>"   
						required="required" />
					
				</td>
			</tr>
			<tr>
				<td align="right" valign="middle">Gender </td>
				<td align="center" valign="middle">:</td>
				<td colspan="3" align="left" valign="middle">
					    <input name="txtfacgender"  
						id="txtfacgender" 
						size="25" 
						type=" List" 
							value="<?php
                        			echo $row[8];	 
                        ?>"
						 required="required" />
						  <datalist id="Gender"> 
				    
					  <option value="Male">
				      <option value="Female"></datalist>
			  </td>
			</tr>
				<tr>
				<td align="right" valign="middle" >BirthDate</td>
				<td align="center" valign="middle">:</td>
				<td colspan="3" align="left" valign="middle">
				    <input name="txtfacbdate"  
					id="txtfacbdate" 
					size="25" 
					type="date"  
                    	value="<?php
                        			echo $row[9];	 
                        ?>"
					required="required" />
			      </td>
			</tr>
			<tr>
				<td align="right" valign="middle">Educational Qualification</td>
				<td align="center" valign="middle">:</td>
				<td colspan="3" align="left" valign="middle">
					  <input 	name="CMBfacultyedu"  
						id="CMBfacultyedu" 
						size="25" 
						type="text" 
						placeholder= "Text Only.." 
							value="<?php
                        			echo $row[10];	 
                        ?>"  
					   	required="required" />
				  </td>
			</tr>
			<tr>
				<td align="right" valign="middle" >Specilization</td>
				<td align="center" valign="middle">:</td>
				<td colspan="3" align="left" valign="middle">
					
					  <input 	name="txtfacspecial"  
						id="txtfacspecial" 
						size="25" 
						type="text" 
						placeholder= "Text Only.." 
							value="<?php
                        			echo $row[11];	 
                        ?>"  
						required="required" />
			    
				</td>
			</tr>
			<tr>
				<td align="right" valign="middle"> Experience</td>
				<td align="center" valign="middle">:</td>
				<td colspan="3" align="left" valign="middle">
				  
				    <input 	name="txtfacexper"  
						id="txtfacexper" 
						size="25" 
						type="Number" 
							value="<?php
                        			echo $row[12];	 
                        ?>"
						   
						required="required" />
                        months
		        </td>
			</tr>
			<tr>
				<td align="right" valign="middle"> Join Date</td>
				<td align="center" valign="middle">:</td>
				<td colspan="3" align="left" valign="middle">
				  
				    <input name="txtfacjdate"  
					id="txtfacjdate" 
					size="25" 
					type="date"  
                    	value="<?php
                        			echo $row[13];	 
                        ?>"
					required="required" />
				  </td>
			</tr>
			<tr>
				<td align="right" valign="middle"></td>
				<td align="center" valign="middle"></td>
				<td width="257" align="center" valign="middle" >
				<input type="submit" name="cmdSumit" id="cmdSumit" value="Submit"  /> </td>
				<td width="56" align="center" valign="middle">
				<input type="reset" name="cmdReset" id="cmdReset" value="Reset" /></td>
				<td width="200" height="75" align="left" valign="middle"></td>
			</tr> 
			</table>
                	</div>

                </div>
           

        </div> <!-- end of content -->
        </div> <!-- end of content_wrapper -->
        <div id="footer">
        	Copyright © 2014 <a >Shivakamal D.T.Ed College, Umarkhed</a> | Designed by <a>JJM CSE Student</a>
        </div>

    </div> <!-- end of slider -->


<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js'></script>
<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>
