<?php
	session_start();
	if($_SESSION['usernm']!="admin")
	{
			header("location:frmLogin.html");
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Faculty form</title>
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
<a><h1></h1>
                <h1>Shivkamal D.T.Ed College,Umarkhed</h1>
                </a>
            </div>
		</div>

        <div id="menu_wrapper">
            <div id="menu">
               <ul class="navigation">
                    <li><a href="./frmhome.html">Home<span class="ui_icon home"></span></a></li>
                    <li><a href="./frmLogin.html">Login<span class="ui_icon aboutus"></span></a></li>
                    <li><a href="./frmcontactus.html">Contact Us<span class="ui_icon gallery"></span></a></li>
                    <li><a href="./frmaboutus.html">About us <span class="ui_icon contactus"></span></a></li>
                </ul>
            </div>
		</div>
<form = action="dbfaculty_save.php" method="post" id="frm_fac" name="frm_fac">
		<div id="content_wrapper">
        <div id="content">
        	
			 <div class="title">
				<h2><center> 
				  <p class="style4">&nbsp;</p>
				  <p class="style4">Faculty Details</p>
		       </center> </h2>
                    <div class="panel" id="home">
                     <table width="800" height="525" style="	border-radius: 10px; 
			box-shadow: 0 0 2px 2px #888; font-family:'Comic Sans MS', 
			cursive;font-size: 14px;">
				<tr>
				<td width="131" align="right" valign="middle">Faculty Name</td>
				<td width="32" align="center" valign="middle">:</td>
				<td colspan="3" align="left" valign="middle">
					    <input 	name="txtfacfname" 
						type="text"   
						id="txtfacfname" 
						size="25" 
						placeholder="First name" 
						pattern='[a-zA-Z]{1,50}'  
						required="required"/>
					    <input 	name="txtfacmname"  
						id="txtfacmname" 
						size="25" 
						type="text" 
						placeholder="Middle name" 
						pattern='[a-zA-Z]{1,50}'  
						required="required" />
					    <input 	name="txtfaclname"  
						id="txtfaclname" 
						size="25" 
						type="text" 
						placeholder= "Last name" 
						pattern='[a-zA-Z]{1,50}'  
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
					 pattern="[a-zA-Z0-9]{1,10}" 
					 required="required"/>
					 
		      </td>
			</tr>
			<tr>
				<td align="right" valign="middle">Contact Details</td>
				<td align="center" valign="middle">:</td>
				<td colspan="3" align="left" valign="middle">
					    <input 	name="txtfaccontact" 
						size="25"  
						id="txtfaccontact" 
						type='tel' 
						pattern='[\+]\d{2}[\(\ ]\d{2}[\)\ ]\d{4}[\-]\d{4}' 
						placeholder='+99(99)9999-9999'  
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
						pattern='[a-zA-Z0-9]{1,10}@[a-zA-Z]{1,10}.(com|org|in|cc)'  />
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
						placeholder= "password"   
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
						placeholder=  "Select Gender " list="Gender" 
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
					required="required" />
			      </td>
			</tr>
			<tr>
				<td align="right" valign="middle">Educational Qualification</td>
				<td align="center" valign="middle">:</td>
				<td colspan="3" align="left" valign="middle">
					 <select id="CMBfacultyedu" name="CMBfacultyedu"> 
                      <option value="BA B.ed">BA B.ed
                      <option value="BA D.ed">BA D.ed
                      <option value="MA B.ed">MA B.ed
                      <option value="MA D.ed">MA D.ed
                      <option value="MA M.ed">MA M.ed
					  <option value="HSC D.ed">HSC D.ed	
                      </option>
			    
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
						pattern='[a-zA-Z]{1,50}'  
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
						placeholder= "" 
						   
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
        	Copyright © 2014<a >Shivkamal D.T.Ed.College,Umarkhed </a> | Designed by <a> JJM CSE STUDENT</a>

        </div>

    </div> <!-- end of slider -->


<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js'></script>
<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>
