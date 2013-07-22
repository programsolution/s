<?php
session_start ();
?>
<!DOCTYPE>
<html>
<head>
  <title>Save Your Income</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta http-equiv="Content-Type"
 content="text/html; charset=iso-8859-1">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.1.1.js"></script>
  <script src="js/nav.js"></script>
</head>
<body >
<div id="bg">
		<div class="c-wrapper">
			<div id="registerform">
				<div id="skin_header">
					<p class="infoTitle"></p>
					<p class="note">I already have a user, <a id="loginBtn">Login</a></p>
					<h3 class="title">Sign up</h3>
				</div>
				<form name="rgForm" id="rgForm" action="index.php" method="post">
					<label class="clearfix">Email<input type="email" class="TextInputSquareSkin-input" required name="rgemail" id="rgemail"></label>
					
					<label class="clearfix">Password<input type="password" class="TextInputSquareSkin-input" required name="rgpassword" id="rgpassword"></label>
					
					<label class="clearfix">Name<input type="text" class="TextInputSquareSkin-input" required name="rgname" id="rgname" ></label>
					
					<label class="clearfix">Race<input type="radio" id="rgrace" name="rgrace" value="Chinese" checked>Chinese <input type="radio" id="rgrace"  name="rgrace" value="Indian" >Indian <input type="radio" id="rgrace"  name="rgrace" value="Malay">Malay</label>
					<br/>
					<label class="clearfix"><input type="submit" name="register" id="register" class="submitButton" value="GO"></label>
				</form>
			</div>
			
			<div id="loginform" class="hidden">
				<div id="skin_header">
					<p class="infoTitle"></p>
					<p class="note">Or, <a id="registerBtn">SignUp</a></p>
					<h3 class="title">Login</h3>
				</div>
				<form name="lnForm" id="lnForm" action="index.php" method="post">
					<label class="clearfix">Email<input type="email" class="TextInputSquareSkin-input" required name="lnemail" id="lnemail"></label>
					
					<label  class="clearfix">Password<input type="password" class="TextInputSquareSkin-input" required name="lnpassword" id="lnpassword"></label>
					<br/>
					<input name="login" type="submit" class="submitButton" value="GO">
				</form>
			</div>
		</div>
	
	<div id="site_structure">
		<div id="pages_container">
			<div id="site_pages">
			
				<div class="area_RectangleAreap1-bg"></div>
				<div id="site_middle">
					<img style="margin-top: 0px; margin-left: 0px; width: 65px; height: 55px;" src="http://static.wixstatic.com/media/41d000_b316fd8d50e28affc7fad326b7f6135a.png_srz_64_54_75_22_0.50_1.20_0.00_png_srz" alt="" class="skins_core_ImageNewSkin-image" >
				</div>
				<div class="richTextContainer" id="site_middle_text">
					<h2 class="font_2"><span style="font-size:48px;">Grow Your Savings With US</span></h2>
				</div>
				<div id="centercontent">

					<div id="centerconent_container">
						<div class="area_RectangleAreac2-bg"></div>
						<div id="WRchTxt7">
						<p class="alignLeft">
		<span class="font_6"><span class="color_18">About Us</span></span></p>
						</div>
						<div id="WRchTxt9">
						<p>
	<span class="font_8">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.<br>
	?<br>
	This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are. Tip: Add your own image by double clicking the image and clicking Change Image.</span></p>
						</div>
					</div>
				</div>
				<div id="left_bar">
					<div id="WRchTxt8">
						<p class="alignLeft"><span class="font_5">Sections</span></p>
					</div>
				</div>
				<div id="StBttn1" style="top: 324px; ">
					<a class="button_BasicButtonb1-link" target="_self" style="text-align: left; cursor: pointer;">
					<span  class="button_BasicButtonb1-label" style="margin-left: 14px; line-height: 35px;">About Us</span></a>
				</div>
				<div id="StBttn2" style="top: 365px; ">
					<a class="button_BasicButtonb1-link" target="_self" style="text-align: left; cursor: pointer;">
					<span  class="button_BasicButtonb1-label" style="margin-left: 14px; line-height: 35px;">Vision & Mission</span></a>
				</div>
				<div id="StBttn3"  style="top: 405px; ">
					<a class="button_BasicButtonb1-link" target="_self" style="text-align: left; cursor: pointer;">
					<span  class="button_BasicButtonb1-label" style="margin-left: 14px; line-height: 35px;">Our Services</span></a>
				</div>
				<div id="StBttn4"  style="top: 445px; ">
					<a class="button_BasicButtonb1-link" target="_self" style="text-align: left; cursor: pointer;">
					<span  class="button_BasicButtonb1-label" style="margin-left: 14px; line-height: 35px;">FAQs</span></a>
				</div>
			</div>
		</div>
		<div id="site_header">
			<div class="screenwidthcontainer_DefaultScreenhc2-bg"></div>
			<div id="logo">
				<h1 style="line-height: 1.1em;" class="font_0"><span style="font-size:60px;">Save Your Income</span></h1>
			</div>
			<div id="login">
				
					
					<?php 
					 if(isset($_SESSION ['name'])){
						echo '<div style="width: 195px;font-size:14px;"> Welcome ' .$_SESSION ['name'] .' | <a href="logout.php">Logout</a></div>';
					 }else{
					?>
					<div id = "login_container">
					<div class="actionTitle" style="width: 195px;">
						Login/Sign up</div>
						<?php } ?>
						
				</div>
			</div>
			<div id="dropdownmenu">
				<div id="menu">
					<div id="menu_bg1">
						<div style="padding: 0px 117px;">
							<p class="menulabel" style="line-height: 58px;">HOME</p>
						</div>
					</div>
					<div id="menu_bg2">
						<div style="padding: 0px 115px;">
							<p class="menulabel" style="line-height: 58px;">INCOME MANAGEMENT</p>
						</div>
					</div>
					<div id="menu_bg3">
						<div style="padding: 0px 113px;">
							<p class="menulabel" style="line-height: 58px;">CONTACT</p>
						</div>
					</div>
					
					<div class="dropWrapper1 hidden" style="width:274px;">
						<div class="submenuwrapper1">
							<p class="submenu-label" style="line-height: 29px;">Vision & Mission</p>
						</div>
						<div class="submenuwrapper2">
							<p class="submenu-label" style="line-height: 29px;">Our Services</p>
						</div>
						<div class="submenuwrapper3">
							<p class="submenu-label" style="line-height: 29px;">FAQs</p>
						</div>
					</div>
					
					<div class="dropWrapper2 hidden" style="width:383px;">
						<div class="submenuwrapper4">
							<p class="submenu-label" style="line-height: 29px;">Income</p>
						</div>
						<div class="submenuwrapper5">
							<p class="submenu-label" style="line-height: 29px;">Expenses</p>
						</div>
						<div class="submenuwrapper6">
							<p class="submenu-label" style="line-height: 29px;">Financial Plan</p>
						</div>
						<div class="submenuwrapper7">
							<p class="submenu-label" style="line-height: 29px;">Savings</p>
						</div>
						<div class="submenuwrapper8">
							<p class="submenu-label" style="line-height: 29px;">Insurance</p>
						</div>
					</div>
					
					<div class="dropWrapper3 hidden" style="width:293px;">
						<div class="submenuwrapper9">
							<p class="submenu-label" style="line-height: 29px;">Contact Information</p>
						</div>
						<div class="submenuwrapper10">
							<p class="submenu-label" style="line-height: 29px;">Facebook Page</p>
						</div>
					</div>
					
				</div>
			</div>	
			<div id="site_footer">
			<div id="site_footer_container">
				<div class="screenwidthcontainer_DefaultScreenfc2-bg"></div>
				<div id="footer_wrichtext">
				<p>
				<span class="font_9">&copy 2013 by Siti Rafidah | Olivia Voon | Nabil Amsyar | Chris Su |</span></p>
				</div>
				<div id="LnkBr0">
					<div class="LinkBarItem">
						<a class="LinkBarItemNoBGSkinlb1-link" href="http://www.twitter.com/" target="_blank" style="cursor: pointer;">
						<div class="ImageSkin ">
						<img  src="http://static.wixstatic.com/media/71f65917c81585f32982a568c20df3ec.png_srz_25_25_85_22_0.50_1.20_0.00_png_srz" style="position: absolute; width: 25px; height: 25px; top: 0px; left: 0px; ">
						</div>
					</a>
					</div>
					<div class="LinkBarItem">
						<a class="LinkBarItemNoBGSkinlb1-link" href="http://www.facebook.com/" target="_blank" style="cursor: pointer;">
						<div class="ImageSkin ">
						<img src="http://static.wixstatic.com/media/770afd1fe2d3552b389caf59c7aac5f7.wix_mp_srz_25_25_85_22_0.50_1.20_0.00_wix_mp_srz" style="position: absolute; width: 25px; height: 25px; top: 0px; left: 0px; ">
						</div>
					</a>
					</div>
					<div class="LinkBarItem">
						<a class="LinkBarItemNoBGSkinlb1-link" href="http://www.google.com/" target="_blank" style="cursor: pointer;">
						<div class="ImageSkin ">
						<img  src="http://static.wixstatic.com/media/0271ff410d2eb1f73d408586f1bc5cdb.wix_mp_srz_25_25_85_22_0.50_1.20_0.00_wix_mp_srz" style="position: absolute; width: 25px; height: 25px; top: 0px; left: 0px; "></div>
					</a>
					</div>
				</div>
			</div>
		</div>
		</div>
		
		

		
	</div>
</div>
</body>
</html>