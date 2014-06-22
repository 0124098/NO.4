<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="textualizer.js"></script>
<title>台南 到此一遊旅遊網</title>
 <style type="text/css">
  #txtlzr {
	font-size: 90px;
	width: 1000px;
	height: 110px;
	margin-left: auto;
	margin-top: 100px;
	font-style: italic;
	margin-right: 110px;
	
  }
 </style>
<script type="text/javascript"> 
  $(function() {
    var txt = $('#txtlzr'); 
    var options = {
      duration: 700, 
      rearrangeDuration: 700,
      effect: 'random',
    }
    txt.textualizer();
    txt.textualizer('start');
  })
</script>

<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
<style type="text/css">
#Image1 {
	text-align: center;
}
</style>
</head>

<body background="bg.jpg" onLoad="MM_preloadImages('images/1-4.png','images/2-4.png','images/3-3.png','images/3-4.png')"><br>
<p>
  <script src="http://lab.wangyuanwai.com/weather/v3/jquery.weather.build.min.js?parentbox=body&moveArea=all&move=1&drag=1&autoDrop=1&styleSize=big&style=cartoon-1&time=1402334986&area=assign&city=%E9%AB%98%E9%9B%84"></script>
<table width="1076" height="626" border="0" align="center" background="images/back-1.jpg" >
<div id="txtlzr">
  <p> Welcome to Tainan City </p>
</div>
<tr>
  <td width="12" het="igh93"><header>
    
  </header></td>
    <td width="1039">&nbsp;</td>
    <td width="11">&nbsp;</td>
  </tr>
  <tr>
    <td height="346" >&nbsp;</td>
    <td align="center" ><p><a href="museum.php" onMouseOver="MM_swapImage('Image1','','images/1-4.png',1)" onMouseOut="MM_swapImgRestore()"><img src="images/1-3.png" name="Image1" width="644" height="311" border="0" align="middle" id="Image1" /></a></p>
      <p><a href="anpin.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','images/2-4.png',1)"><img src="images/2-3.png" name="Image2" width="319" height="305" border="0" id="Image2" /></a><a href="wu.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image3','','images/3-4.png',1)"><img src="images/3-3.png" name="Image3" width="319" height="305" border="0" id="Image3" /></a></p>
      <p>&nbsp;</p>
<p>&nbsp;</p></td>&nbsp;  </tr>
  <tr>
    <td>&nbsp;</td>
<td align="center"></html><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>0124098</title>
	<script>
	
	
	var Pstart=0;	//圖檔編號,開始為0
	function plusnum()	//每次呼叫就將圖檔編號加1
	{
	Pstart ++
	if (Pstart>5) Pstart=0;
	}
	
	//改變每張圖所用的圖檔
	function showit()	
	{
		var imgaPoint="";
		for(i=0; i<6 ;i++)		//利用迴圈更改每張圖的圖檔
		{
			plusnum();
			imgaPoint="IMGA"+i;		//建立每張圖檔的名稱

			document.images[imgaPoint].src="images/DEMO0"+Pstart+".jpg";//組合出目前要顯示的圖檔字串
		}
		plusnum();
		TimerID=setTimeout("showit()",1500);
		
		
		if(TimerID>1)//判斷Loop是否執行
		{
			document.all["start"].style.display="none";	   //隱藏開始按鈕    nono代表隱藏
			document.all["stop"].style.display="list-item";//顯示暫停按鈕    list-item代表顯示
		}
		
	}
	
	function plusnumstop()              //按下暫停時直行
	{
		if (TimerID) {
            clearTimeout(TimerID);    //clearTimeout()可清除setTimeout的設定
            TimerID = 0;              //歸零 即停止
			document.all["start"].style.display="list-item";//顯示開始按鈕
			document.all["stop"].style.display="none";		//隱藏暫停按鈕
        }
	}
	
</script>
<style type="text/css">
#txtlzr p {
	font-weight: bold;
}
</style></head>
<body class="A1"><body onLoad="showit()">
		<IMG SRC="images/DEMO00.jpg" NAME="IMGA0" WIDTH=150 HEIGHT=150 align="middle">
		
		<IMG SRC="images/DEMO01.jpg" NAME="IMGA1" WIDTH=150 HEIGHT=150 align="middle">
		
		<IMG SRC="images/DEMO02.jpg" NAME="IMGA2" WIDTH=150 HEIGHT=150 align="middle">

		<IMG SRC="images/DEMO03.jpg" NAME="IMGA3" WIDTH=150 HEIGHT=150 align="middle">
		
		<IMG SRC="images/DEMO04.jpg" NAME="IMGA4" WIDTH=150 HEIGHT=150 align="middle">
		
		<IMG SRC="images/DEMO05.jpg" NAME="IMGA5" WIDTH=150 HEIGHT=150 align="middle">
        		
      

	    
</body>

    <input name="start" type="button" value="開始" onclick="showit()">
    <input name="stop" type="button" value="暫停" onclick="plusnumstop()">
	
</body>

</html>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

<P>&nbsp;</P>
<P>&nbsp;</P>
<P>&nbsp;</P>
<P>&nbsp;</P>
</body>
</html>