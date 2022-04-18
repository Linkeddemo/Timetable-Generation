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
<title>Generate Timetable</title>
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
                    <li><a href="./frmhome.html">Home<span class="ui_icon home"></span></a></li>
                    <li><a href="./frmLogin.html">Login<span class="ui_icon aboutus"></span></a></li>
                    <li><a href="./frmcontactus.html">Contact Us<span class="ui_icon gallery"></span></a></li>
                    <li><a href="./frmaboutus.html">About us <span class="ui_icon contactus"></span></a></li>
                </ul>
            </div>
		</div>

		<div id="content_wrapper">
        <div id="content">
        	
                
			 <div class="title">
				<h2 align="center">&nbsp;</h2>
				<h2 align="center">Fill information And Generate Timetable</h2>
				<table width="800">
                 <tr>
             	 <td width="344"><a href="./frmpassword.html">Change the password</a></td>
             	 <td width="344"><a href="./frmlogin.html">Logout</a></td></tr>
            	</table>
                    <div class="panel" id="home">
                    <table width="800" height="300" style="	border-radius: 10px; 
			box-shadow: 0 0 2px 2px #888; font-family:'Comic Sans MS', 
			cursive;font-size: 14px;">
		
<tr>
              <td><h2>Fill New Information</h2></td>
              <td><h2>Update the information</h2></td>
            </tr>
            <tr>
              <td width="344"><a href="./frmfaculty.php">Fill Faculty Information</a></td>
              <td width="344"><a href="./frmfacultyshow.php">Update Faculty Information</a></td></tr>
            <tr>
              <td><a href="./frmsubject.php">Fill Subject Information</a></td>
              <td><a href="./frmsubjectupdate.php">Update Subject Information</a></td></tr>
		    <tr>
		      <td><a href="./frmclass.php">Fill Class Information</a></td>
		      <td><a href="./frmclassupdate.php">Update class Information</a></td></tr>
			<tr>
              <td><a href="./frmAllocation.php">Allocate Subject to teacher</a></td>
              <td><a href="./frmAllocationupdate.php">Update Allocation of Subject to teacher</a></td></tr>
            <tr>
              <td><a href="./frmtimeslot.php">Fill Time slot</a></td>
              <td><a href="./frmtimeslotupdate.php">Update Time slot</a></td></tr>
            <tr>
              <td><a href="./frmfinalreport.php">See the Timetable</a></td>
              <td><a href="./frmfacshowdel.php"> Delete Faculty Record </a></td>
              <tr>
              <td><a href="./frmreport.php">See the reports</a></td>
            </tr>
			</table>
				<table width="799">
               <tr> <td width="338" align="center" valign="middle" >
                <form method="post" action="1new.php">
					<input type="submit" name="cmdSumit" id="cmdSumit" value="Generate First Year Timetable"  />
                 </form></td></tr>
                <tr> <td width="338" align="center" valign="middle" >
                <form method="post" action="2new.php">
					<input type="submit" name="cmdSumit" id="cmdSumit" value="Generate Second Year Timetable"  />
                 </form>                 
			  </td></tr>
                </table>
                    </div>

                </div>
           

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
