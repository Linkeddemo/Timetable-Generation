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
<title>Timeslot form</title>
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
<form = action="dbtimeslot_save.php" method="post" id="frm_timeslot" name="frm_timeslot">
		<div id="content_wrapper">
        <div id="content">
        	<div class="scroll">
                <div class="scrollContainer">
			  <div class="title">
				<h2><center> 
				  <p class="style4">&nbsp;</p>
				  <p class="style4">Time slot information</p>
			    </center> </h2>
                    <div class="panel" id="home">
                      <table width="800" height="300" style="	border-radius: 10px; 
			box-shadow: 0 0 2px 2px #888; font-family:'Comic Sans MS', 
			cursive;font-size: 14px;">
			<tr>
				<td height="59" align="right" valign="middle">Time slots</td>
				<td align="center" valign="middle">:</td>
				<td colspan="3" align="left" valign="middle">
					<input 	name="txttimeslot"  
						id="txttimeslot" 
						size="25" 
						type="Varchar" 
						placeholder= "Time slot"  
						required="required" />
					
				</td>
			</tr>
			<tr>
				<td align="right" valign="middle"></td>
				<td align="center" valign="middle"></td>
				<td width="108" align="center" valign="middle" >
					<input type="submit" name="cmdSumit" id="cmdSumit" value="Submit"  />
			  </td>
				<td width="198" align="center" valign="middle">
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
        	        	Copyright © 2014 <a >Shivkamal D.T.Ed College,Umarkhed </a> | Designed by <a> JJM CSE STUDENT</a>
        </div>

    </div> <!-- end of slider -->


<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js'></script>
<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>
