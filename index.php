<?php include "include/config.php"; include "include/function.php";
$gen_stats=gen_stats(48);

$query="SELECT value FROM config where name='server_start_date'";
$result=mysql_query($query);
$row=mysql_fetch_assoc($result);
$row = $row['value'];

$start = strtotime($row);
$age = 30240000; // 350 days
$now = time();

$remain = floor(($start + $age - $now) / 86400);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<script type="text/javascript">
    var GB_ROOT_DIR = "js/";
</script>
<script type="text/javascript" src="js/AJS.js"></script>
<script type="text/javascript" src="js/AJS_fx.js"></script>
<script src="js/ac_activex.js" type="text/javascript"></script>
<script type="text/javascript" src="js/gb_scripts.js"></script>
<link href="template/gb_styles.css" rel="stylesheet" type="text/css" />

<title>ط¨ط§ط²غŒ ط¢ظ†ظ„ط§غŒظ† ط§ط³طھط±ط§طھعکغŒع© طھط±غŒط¨ط§ط³ ( ط¯ظ†غŒط§ ط¯ظˆظ… ) - طµظپط­ظ‡ ط§طµظ„غŒ</title>
<?php include("include/meta.php");?>
<style type="text/css">
/*----------Text Styles----------*/
.ws6 {font-size: 8px;}.ws7 {font-size: 9.3px;}.ws8 {font-size: 11px;}.ws9 {font-size: 12px;}.ws10 {font-size: 13px;}.ws11 {font-size: 15px;}.ws12 {font-size: 16px;}.ws14 {font-size: 19px;}.ws16 {font-size: 21px;}.ws18 {font-size: 24px;}.ws20 {font-size: 26px;}.ws22 {font-size: 29px;}.ws24 {font-size: 32px;}.ws26 {font-size: 35px;}.ws28 {font-size: 37px;}.ws36 {font-size: 48px;}.ws48 {font-size: 64px;}.ws72 {font-size: 96px;}.wpmd {font-size: 13px;font-family: 'tahoma‌';font-style: normal;font-weight: normal;}
/*----------Para Styles----------*/
DIV,UL,OL /* Left */
{
 margin-top: 0px;
 margin-bottom: 0px;
}
</style>

<style type="text/css">
a.style1:link{color:#FFFFFF;text-decoration: none;}a.style1:visited{color:#FFFFFF;text-decoration: none;}a.style1:hover{color:#FFFFFF;text-decoration: none;}a.style1:active{color:#FFFFFF;text-decoration: none;}a.style2:link{color:#804000;text-decoration: none;}a.style2:visited{color:#800000;text-decoration: none;}a.style2:hover{color:#800000;text-decoration: none;}a.style2:active{color:#800000;text-decoration: none;}
</style>
<style type="text/css">
div#container
{
    position:relative;
    width: 801px;
    margin-top: 0px;
    margin-left: auto;
    margin-right: auto;
    text-align:left;
}
body {text-align:center;margin:0}
</style>

</head>

<body background="images/background.jpg" bgColor="#C6B895" style="background-repeat:repeat-x;">

<div id="container">
<div id="image1" style="position:absolute; overflow:hidden; left:0px; top:0px; width:801px; height:41px; z-index:0"><img src="images/sprites.jpg" alt="" title="" border=0 width=801 height=41></div>

<div id="image2" style="position:absolute; overflow:hidden; left:0px; top:40px; width:800px; height:115px; z-index:1"><img src="images/bg-logo.jpg" alt="" title="" border=0 width=800 height=115></div>

<div id="image3" style="position:absolute; overflow:hidden; left:0px; top:161px; width:795px; height:17px; z-index:2"><img src="images/sprite4.png" alt="" title="" border=0 width=795 height=17></div>

<div id="image4" style="position:absolute; overflow:hidden; left:0px; top:176px; width:794px; height:390px; z-index:3"><img src="images/bg-content-line.jpg" alt="" title="" border=0 width=794 height=390></div>

<div id="image11" style="position:absolute; overflow:hidden; left:0px; top:563px; width:795px; height:17px; z-index:9"><img src="images/sprite5.png" alt="" title="" border=0 width=795 height=17></div>


<div id="image12" style="position:absolute; overflow:hidden; left:-64px; top:80px; width:196px; height:379px; z-index:11"><img src="images/bg-paladin.png" alt="" title="" border=0 width=196 height=379></div>

<div id="text2" style="position:absolute; overflow:hidden; left:336px; top:177px; width:446px; height:39px; z-index:130">
<div class="wpmd">
<div align=right><font color="#969696" face="Arial" class="ws20"><B>ط¨ظ‡ ط¨ط§ط²غŒ طھط±غŒط¨ط§ط³ ط®ظˆط´ ط¢ظ…ط¯غŒط¯</B></font></div>
</div></div>

<div id="text2" style="position:absolute; overflow:hidden; left:334px; top:175px; width:446px; height:39px; z-index:131">
<div class="wpmd">
<div align=right><font color="#993300" face="Arial" class="ws20"><B>ط¨ظ‡ ط¨ط§ط²غŒ طھط±غŒط¨ط§ط³ ط®ظˆط´ ط¢ظ…ط¯غŒط¯</B></font></div>
</div></div>

<div id="text3" style="position:absolute; overflow:hidden; left:329px; top:225px; width:450px; height:199px; z-index:14">
<div class="wpmd">
<div align=right><font color="#993300" face="Arial" class="ws12">ط¨ظ‡ ط¨ط§ط²غŒ ط¢ظ†ظ„ط§غŒظ† ط§ط³طھط±ط§طھعکغŒع© طھط±غŒط¨ط§ط³ ط®ظˆط´ ط¢ظ…ط¯غŒط¯ ط´ظ…ط§ ط¨ط§ ط¹ط¶ظˆغŒطھ ط¯ط± ط§غŒظ† ط¨ط§ط²غŒ ظ…غŒ طھظˆط§ظ†غŒط¯ ط¨ظ‡ طµظˆط±طھ ط±ط§غŒع¯ط§ظ† ط¯ط± ظ…ط­غŒط·غŒ ع¯ط±ط§ظپغŒع©غŒ ط¨ط§ ظ‡ط²ط§ط±ط§ظ† ط§غŒط±ط§ظ†غŒ ط¯غŒع¯ط± ط¨ظ‡ طµظˆط±طھ ط¢ظ†ظ„ط§غŒظ† ط¨ط§ط²غŒ ع©ظ†غŒط¯ . ط´ظ…ط§ ط¯ط± ط§غŒظ† ط¨ط§ط²غŒ ط¯ط± ظ†ظ‚ط´ غŒع© ط´ظ‡ط±ط¯ط§ط± ظ‡ط³طھغŒط¯ ظˆ ظˆط¸غŒظپظ‡ ط¯ط§ط±غŒط¯ طھط§ ظ¾ط§غŒط§ظ† ط¯ظˆط±ظ‡ ط¨ط§ط²غŒ ع©ظ‡ 
	350 ط±ظˆط² ط·ظˆط± ظ…غŒ ع©ط´ط¯ ط´ظ‡ط± ط®ظˆط¯طھط§ظ† ط±ط§ ظ…ط¯غŒط±غŒطھ ع©ظ†غŒط¯ . ظ†ط­ظˆظ‡ ظ…ط¯غŒط±غŒطھ ط´ظ…ط§ ط¨ط³طھع¯غŒ ط¨ظ‡ ط®ظˆط¯طھط§ظ† ط¯ط§ط±ط¯ ط§ظ…ط§ ط§غŒظ† ط§ظ…ط± ظ…غŒ طھظˆط§ظ†ط¯ ط´ظ…ط§ ط¨ط±طھط±غŒظ† ط¨ط§ط²غŒع©ظ† ط§غŒظ† ط³ط§غŒطھ ط¨ع©ظ†ط¯ ط¯ط±  طµظˆط±طھغŒ ع©ظ‡ ط¯ط± ظ¾ط§غŒط§ظ† ط¨ط§ط²غŒ ط¨طھظˆط§ظ†غŒط¯ ط¬ط² ط³ظ‡ ظ†ظپط± ط¨ط§ط´غŒط¯ ط¨ط±ظ†ط¯ظ‡ ط¬ظˆط§غŒط²غŒ ظ†ظپغŒط³ ط¨ظ‡ ظ¾ط§ط³ 350 ط±ظˆط² ط¨ط§ط²غŒ ظ…طھظˆط§ظ„غŒ ط¯ط±غŒط§ظپطھ ظ…غŒ ع©ظ†غŒط¯ </font></div>
</div></div>

<?php
if(!isset($_SESSION['user'][0], $_SESSION['index_town'])){
?>

<div id="image13" style="position:absolute; overflow:hidden; left:394px; top:369px; width:309px; height:37px; z-index:15"><a href="register.php" title="ط¹ط¶ظˆغŒطھ ط±ط§غŒع¯ط§ظ† ط¯ط± ط¨ط§ط²غŒ" target="_self"><img src="submit/sprite1.png" alt="" title="" border=0 width=309 height=37></a></div>

<form action="login_.php" method="post" name="form" target="_self">
<div id="formtext1" style="position:absolute; left:95px; top:271px; z-index:18"><input class='textbox' type="text" name="name" size="19" id="name"></div>
<div id="formtext2" style="position:absolute; left:95px; top:307px; z-index:19"><input class='textbox' type="password" size="19" name="pass" ></div>
<div id="formbutton1" style="position:absolute; left:132px; top:350px; z-index:23"><input type="image" src="submit/login.png" name="login"></div>
</form>
<div id="text5" style="position:absolute; overflow:hidden; left:925px; top:233px; width:-192px; height:66px; z-index:20">
</div>

<div id="text1" style="position:absolute; overflow:hidden; left:165px; top:173px; width:141px; height:39px; z-index:12">
<div class="wpmd">
<div align=right><font color="#993300" face="Arial" class="ws20"><B>ظˆط±ظˆط¯ ع©ط§ط±ط¨ط±ط§ظ†</B></font></div>
</div></div>

<div id="text6" style="position:absolute; overflow:hidden; left:243px; top:271px; width:63px; height:26px; z-index:21">
<div class="wpmd">
<div align=right><font color="#993300" face="Arial" class="ws12">ظ†ط§ظ… ع©ط§ط±ط¨ط±غŒ</font></div>
</div></div>

<div id="text7" style="position:absolute; overflow:hidden; left:243px; top:309px; width:65px; height:26px; z-index:22">
<div class="wpmd">
<div align=right><font color="#993300" face="Arial" class="ws12">ط±ظ…ط² ط¹ط¨ظˆط±</font></div>
</div></div>

<div id="text12" style="position:absolute; overflow:hidden; left:59px; top:333px; width:250px; height:16px; z-index:36">
<div class="wpmd">
<div align=right><font color="#993300" face="Arial" class="ws8"><b>(ط§ع¯ط± ظ†طھظˆط§ظ†ط³طھغŒط¯ ظˆط§ط±ط¯ ط³ط§غŒطھ ط¨ط´ظˆغŒط¯ ظ…ط±ظˆط±ع¯ط±طھط§ظ† ط±ط§ طھط؛غŒغŒط± ط¯ظ‡غŒط¯)</b></font></div>
</div></div>

<?php
}else{
?>
<div id="text12" style="position:absolute; overflow:hidden; left:70px; top:300px; width:250px; height:50px; z-index:36">
<div class="wpmd">
<div align="center"><font color="#993300" face="Arial" class="ws12"><b>
ط´ظ…ط§ ظ‚ط¨ظ„ط§ ظˆط§ط±ط¯ ط³ط§غŒطھ ط´ط¯ظ‡â€Œط§غŒط¯
<br/>
ط¨ط±ط§غŒ ظˆط±ظˆط¯ ط¨ظ‡ ط´ظ‡ط±
<a href="town.php?town=<?php echo $_SESSION['index_town']; ?>">ط§غŒظ†ط¬ط§</a>
ع©ظ„غŒع© ع©ظ†غŒط¯.
</b></font></div>
</div></div>
<?php
}
?>

<div id="text8" style="position:absolute; overflow:hidden; left:385px; top:445px; width:396px; height:32px; z-index:24">
<div class="wpmd">
<div align=right><font color="#993300" face="Arial" class="ws16"><B> طھط¨ظ„غŒط؛ط§طھ</B></font></div>
</div></div>

<div id="text9" style="position:absolute; overflow:hidden; left:21px; top:438px; width:283px; height:129px; z-index:29">
<div class="wpmd">
<div align=right><font color="#993300" face="Arial" class="ws16">ط¢ظ…ط§ط± ط³ط§غŒطھ</font></div>
<div align=right><font color="#993300" face="Arial" class="ws12">ط§ط¹ط¶ط§غŒ ط³ط§غŒطھ:&nbsp;<?php echo $gen_stats[0][0]; ?>&nbsp; ظ†ظپط±<br>
ط¢ظ†ظ„ط§غŒظ†ظ‡ط§غŒ ط§ظ…ط±ظˆط²:&nbsp;<?php echo $gen_stats[1][0]; ?>&nbsp; ظ†ظپط±<br>
ط²ظ…ط§ظ† ط³ط±ظˆط± :&nbsp;350&nbsp; ط±ظˆط²<br>
ط²ظ…ط§ظ† ظ…ط§ظ†ط¯ظ‡ ظ¾ط§غŒط§ظ† ط³ط±ظˆط±:&nbsp;<?php echo $remain; ?>&nbsp; ط±ظˆط²<br>
ط¸ط±ظپغŒطھ ط³ط±ظˆط± ط¨ط§ط²غŒ :&nbsp;25000&nbsp; ظ†ظپط±</font></div>
</div></div>




<div id="text10" style="position:absolute; overflow:hidden; left:8px; top:6px; width:783px; height:24px; z-index:3">
<div class="wpmd">
<div align=center><font face="Arial" class="ws12"><B><a href="index.php" title="طµظپط­ظ‡ ظ†ط®ط³طھ" target="_self" class="style2">طµظپط­ظ‡ ظ†ط®ط³طھ</a></B></font><font face="Arial" class="ws12"><B>&nbsp;&nbsp; |&nbsp;&nbsp; </B></font><font face="Arial" class="ws12"><B><a href="history.php" title="ط¯ط§ط³طھط§ظ† ط´ع©ظ„ ع¯غŒط±غŒ ط¨ط§ط²غŒ" target="_self" class="style2">ط¯ط§ط³طھط§ظ† ط¨ط§ط²غŒ</a></B></font><font face="Arial" class="ws12"><B>&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp; </B></font><font face="Arial" class="ws12"><B><a href="board" title="ط§ظ†ط¬ظ…ظ† ط¨ط§ط²غŒ" target="_blank" class="style2">ط§ظ†ط¬ظ…ظ†</a></B></font><font face="Arial" class="ws12"><B>&nbsp;&nbsp; |&nbsp;&nbsp; </B></font><font face="Arial" class="ws12"><B><a href="images/screenshoot1.jpg" title="طھطµظˆغŒط± ظ…ط­غŒط· ط´ظ‡ط± ط¨ط§ط²غŒ" rel="gb_imageset[nice_pics]" class="style2">طھطµط§ظˆغŒط± ط¨ط§ط²غŒ</a></B></font><font face="Arial" class="ws12"><B>&nbsp;&nbsp; |&nbsp; </B></font><font face="Arial" class="ws12"></font><font face="Arial" class="ws12"><B><a href="question1.php" title="ط³ظˆط§ظ„ط§طھ ظ…طھط¯ط§ظˆظ„" target="_self" class="style2">ط³ظˆط§ظ„ط§طھ ظ…طھط¯ط§ظˆظ„</a></B></font><font face="Arial" class="ws12"><B>&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp; 
	<a title="ظˆط¨ظ„ط§ع¯ طھط±غŒط¨ط§ط³" target="_blank" class="style2" href="http://blog.tribos.ir/">ظˆط¨ظ„ط§ع¯ طھط±غŒط¨ط§ط³</a>&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp; </B><font face="Arial" class="ws12"><B><a href="register.php" title="ط¹ط¶ظˆغŒطھ ط¯ط± ط¨ط§ط²غŒ" target="_self" class="style2">ط¹ط¶ظˆغŒطھ ط¯ط± ط³ط§غŒطھ</a></B></font><font face="Arial" class="ws12"><B>&nbsp;&nbsp; |&nbsp;&nbsp; </B></font><font face="Arial" class="ws12"><B><a href="contact.php" title="طھظ…ط§ط³ ط¨ط§ ظ…ط§" target="_self" class="style2">طھظ…ط§ط³ ط¨ط§ ظ…ط§</a></B></font></div>
</div></div>
<div id="text11" style="position:absolute; overflow:hidden; left:70px; top:579px; width:660px; height:23px; z-index:35">
<div class="wpmd">
<div align="center">طھط±غŒط¨ط§ط³ ط¯ط§ط±ط§غŒ ظ…ط¬ظˆط² ط§ط² ظˆط²ط§ط±طھ ظپط±ظ‡ظ†ع¯ ظˆ ط§ط±ط´ط§ط¯ ط§ط³ظ„ط§ظ…غŒ </div>
</div></div>



<a href="images/mapp.jpg" title="طھطµظˆغŒط± ظ†ظ‚ط´ظ‡ ط¨ط§ط²غŒ" rel="gb_imageset[nice_pics]"></a>
<a href="images/hall.jpg" title="طھطµظˆغŒط± ظپط¶ط§غŒ ط´ظ‡ط±ط¯ط§ط±غŒ" rel="gb_imageset[nice_pics]"></a>


<div id="image1050" style="position:absolute; overflow:hidden; left:330px; top:478px; width:448px; height:67px; z-index:28">
<img src="images/bg-frame.gif" alt="" title="" border=0 width=448 height=67>
</div>

<div id="image1050" style="position:absolute; overflow:hidden; left:334px; top:481px; width:440px; height:60px; z-index:29">
<a href="http://www.facebook.com/khabazide" title="ظ‡ظˆط§ط¯ط§ط± طھط±غŒط¨ط§ط³ ط´ظˆغŒط¯"><img src="http://tribos.ir/images/ads.gif" alt="" title="" border=0></a>
</div>

<div id="flash1" style="position:absolute; overflow:hidden; left:20px; top:41px; width:700px; height:115px; z-index:3653">
<script type="text/javascript">
AC_RunFlashContent("id","flash1","width","700","height","115","quality","high","autoplay","false","loop","true","wmode","transparent","codebase","http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab","pluginspage","http://www.macromedia.com/go/getflashplayer","src","images/swf.swf");
</script>
<noscript>
<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab" width=700 height=115>
<param name="movie" value="images/swf.swf">
<param name="quality" value="high">
<param name="loop" value="true">
<param name="wmode" value="transparent">
<param name="autoplay" value="false">
<!--[if !IE]>-->
<object data="images/swf.swf" width="700" height="115" type="application/x-shockwave-flash">
<param name="pluginurl" value="http://www.macromedia.com/go/getflashplayer">
<param name="quality" value="high">
<param name="loop" value="true">
<param name="wmode" value="transparent">
<param name="autoplay" value="false">
</object>
<!--<![endif]-->
</object>
</noscript>
</div>

</div></font></body>
</html>
