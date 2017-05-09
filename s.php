<?
function headRun_____(){}
//打开数据库
$d=new mysql_db;
$d->on("localhost:3306","root","123","jgc");

//初始化页面间传递的变量，包括GET和POST两种方式
foreach($_POST as $k=>$v){$k="p".$k;$$k=$v;}
foreach($_GET as $k=>$v){$k="g".$k;$$k=$v;}unset($k);unset($v);

//权限预置
@$sa=$d->fetch($d->query("select * from admin where id=".$_SESSION["admId"])) or $sa="";
@$sc=$d->fetch($d->query("select * from vip1 where id1=".$_SESSION["vipId1"])) or $sc="";
//权限判断
if(mb_substr($t,1,1,"utf-8")=="a"&&$sa==""){die("<script>top.location='?x=pgJgc".date('Y-m-d')."';</script>");}
if(mb_substr($t,1,1,"utf-8")=="c"&&$sc==""){die("<script>top.location='?x=pgLogin';</script>");}
//预置页面模板名$t和页面变量$g
if($gx==""){$gx="pgIndex";}
list($t,$g)=explode("/",$gx);
unset($gx);
echo"<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"
\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">";
echo"<html xmlns=\"http://www.w3.org/1999/xhtml\">";
echo"<head>";
echo"<link href=\"$dir/images/11.ico\" type=\"image/x-icon\" rel=\"shortcut icon\">";
echo"<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />";
echo"<title>".$sa['gsm1']."</title>";
echo"</head>";

//通用css效果
echo"<style>";
echo"*{padding:0px;margin:0px;font-family:微软雅黑,Verdana,Arial,Helvetica,sans-serif;font-size:12px;text-decoration:none;color:#333;}";
echo"body, div, ul, li, a, img, p, dl, dt, dd, h1, h2, h3, h4, span, strong { margin: 0px; padding: 0px; text-decoration: none; border: 0px none; list-style: outside none none; }";
echo".wapper { width: 1200px; margin: 0px auto;  }";
echo"div[d]{margin:0 auto;overflow:hidden;}";
echo"img,iframe{border:0px solid #f00}";
echo"table{width:100%}";
echo"td{vertial-align:middle;text-align:center;overflow:hidden;}";
echo"input[d][name]{width:160px; height:20px;}";
echo"input[d][type=submit],[d][type=reset],[d][type=button]{height:25px; width:50px;border:1px solid #555; cursor:pointer}";
echo"input[d][type=submit]:hover,[d][type=reset]:hover,[d][type=button]:hover{background:#888;}";
echo"</style>";
echo"<script language=\"javascript\" src=\"$dir/c.php?t=$t\"></script>";
echo"<body>";
echo"<iframe id=\"run\" name=\"run\" src=\"frameborder=\"0\" width=\"0\" height=\"0\"></iframe>";
include(mb_substr($t,0,1,"utf-8").".php");
echo"</body>";
echo"</html>";
function siteFun_____(){}
	function ip_(){//获取真实IP。
		if(getenv("HTTP_CLIENT_IP")&&strcasecmp(getenv("HTTP_CLIENT_IP"),"unknown"))
			$x1=getenv("HTTP_CLIENT_IP");
		else if(getenv("HTTP_X_FORWARDED_FOR")&&strcasecmp(getenv("HTTP_X_FORWARDED_FOR"),"unknown"))
			$x1=getenv("HTTP_X_FORWARDED_FOR");
		else if(getenv("REMOTE_ADDR")&&strcasecmp(getenv("REMOTE_ADDR"),"unknown"))
			$x1=getenv("REMOTE_ADDR");
		else if(isset($_SERVER['REMOTE_ADDR'])&&$_SERVER['REMOTE_ADDR']&&strcasecmp($_SERVER['REMOTE_ADDR'],"unknown"))
			$x1=$_SERVER['REMOTE_ADDR'];
		else
			$x1="unknown";
		return $x1;
	}
function delHtm_($delHtmStr){
		$delHtm_=strip_tags($delHtmStr);
		$delHtm_=strtr($delHtm_,array('$nbsp;'=>'',' '=>'','　'=>'',chr(10)=>'',chr(13)=>''));
		return $delHtm_;
	}

function mod_($modName,$modSession){
	$modSessionName="session".md5(rand());
	$_SESSION[$modSessionName]=$modSession;
	$mod_.="<script";
	$mod_.=" language=\"javascript\"";
	$mod_.=" src=\"/mod/".$modName."/run.php?x=".$modSessionName."\"";
	$mod_.=">";
	$mod_.="</script>";
	return $mod_;
	}
function seo_(){global $t;global $d;global $g;
	$s=$d->fetch($d->query("select * from admin limit 1"));
	$seo_=array("tit1"=>$s["firm1"],"key"=>$s["key1"],"des"=>$s["des1"]);
	if(mb_substr($t,1,1,"utf-8")=="a"){
		$seo_=array("tit1"=>"后台管理_".$s["firm1"],"key"=>"","des"=>"");
	}
	if(mb_substr($t,1,1,"utf-8")=="g"){
		switch($t){default:
		break;case"pgAdmLogin":
			$seo_=array("tit1"=>后台登录_.$s["tit1"],"key"=>"","des1"=>"");
		break;case"pgIndex":
			$seo_=array("tit1"=>初阳科技_.$s["tit1"],"key"=>"","des1"=>"");
		break;}
	}
return $seo_;
}
function inc_($incMode){global $dir;global $t;global $g;global $d;global $sa;global $sc;
	$inc=$t;
	$t=$incMode;
	include("p.php");
	echo "<script language=\"javascript\" src=\"$dir/c.php?t=".$t."\"></script>";
	$t=$inc;
}
function ulf_($ulfValue){global $sa;
	if($ulfValue=="*"){
		$ulfValue=$sa['wutu'];
		}
	return "/".$_SESSION["dir"]."/ulf/".mb_substr($ulfValue,0,6,'utf-8')."/".$ulfValue;
}
function left_($leftStr,$leftLength,$leftExt=""){//在$leftStr中截取$leftLength个字符，多余的字符用$leftExt代替。2016-8-8
		$left_=mb_substr($leftStr,0,$leftLength,"utf-8");
		if($left_<>$leftStr){$left_.=$leftExt;}
		return $left_;
	}
function url_($urlValue){
	return "?x=".$urlValue;
	}
function ifr_($ifrId,$ifrSrc,$ifrRest=""){
	return "<iframe src='".$ifrSrc."' name='".$ifrId."' onload='this.height=this.contentWindow.document.documentElement.scrollHeight;'".$ifrRest."></iframe>";
	}
function countSeason($start,$end){
    $temp = date("Y-m",strtotime("$start +1month"));
    while ($temp <= $end){
        $time[] = $temp;
        $temp = date("Y-m",strtotime("$temp +1month"));
    }
    return $time;
}
function cash_($cashValue=0,$cashStyle=""){//商品价格
	$cashValue=number_format($cashValue/100,2);
	$cashValue="￥".$cashValue;
	$cashValue="<font style='font-family:微软雅黑;color:#f00;".$cashStyle."'>".$cashValue."</font>";
	return $cashValue;	
}
function site_($siteMode){global $d;
	$_=$d->fetch($d->query("select * from admin where id=1"));
	$_=$_[$siteMode];
	return $_;
	}
function page_(){global $d;global $t;global $g;
	list($_["pageNo"],$_["pageSize"],$_["pageKey"])=explode(",",$g);
	if((int)$_["pageNo"]==0){$_["pageNo"]=1;}
	if((int)$_["pageSize"]==0){$_["pageSize"]=12;}
	switch($t){default:
		break;case"taLog":
		$_["pageSize"]=15;
	if($_["pageKey"]==""){
		$_["pageSql"]="select * from log1 order by date1 desc";}else{
		$_["pageSql"]="select * from log1 where kdlog1='".$_["pageKey"]."' order by date1 desc";
	}
	break;case"pgIncHead":
	if($_["pageKey"]==""){
	$_["pageSql"]="select * from admin where id=1";
	}
	break;case"pgIncBottom":
	if($_["pageKey"]==""){
	$_["pageSql"]="select * from yqlj order by id1 desc";
	}
	break;case"pgYwjs":
	if($_["pageKey"]==""){
	$_["pageSql"]="select * from img1 order by id1 desc";
	}
	break;case"taQydz":
	if($_["pageKey"]==""){
	$_["pageSql"]="select * from qydz order by id1 desc";
	}
	break;case"pgDjwz":
	if($_["pageKey"]==""){
	$_["pageSql"]="select * from ware order by id1 desc";
	}else{
		$_["pageSql"]="select * from ware where kdWare like '%".$_["pageKey"]."%' order by id1 desc";
		}
	break;case"taAtc":
	if($_["pageKey"]==""){
	$_["pageSql"]="select * from atc order by id1 desc";
	}
	break;case"pgAtc":
	if($_["pageKey"]==""){
	$_["pageSql"]="select * from atc order by id1 desc";
	}
	break;case"taWare":
	if($_["pageKey"]==""){
	$_["pageSql"]="select * from ware order by date1 desc";
	}else{
	$_["pageSql"]="select * from ware where kdWare='".$_["pageKey"]."' order by date1 desc";
		}
	break;case"pgWare":
	if($_["pageKey"]==""){
	$_["pageSql"]="select * from ware order by date1 desc";
	}else{
	$_["pageSql"]="select * from ware where kdWare='".$_["pageKey"]."' order by date1 desc";
		}
	break;case"taZzry":
	if($_["pageKey"]==""){
	$_["pageSql"]="select * from zzry order by date1 desc";
	}
	break;case"pgZzry":
	if($_["pageKey"]==""){
	$_["pageSql"]="select * from zzry order by date1 desc";
	}
	break;}
	$_["r"]=$d->query($_["pageSql"]);
	$_["recordCount"]=$d->sum($_["r"]);
	$_["pageCount"]=ceil($_["recordCount"]/$_["pageSize"]);
	if($_["pageNo"]<1){$_["pageNo"]=1;}
	if($_["pageNo"]>$_["pageCount"]){$_["pageNo"]=$_["pageCount"];}
	return $_;
}
function sysFun_____(){}
function classFun__________(){}
class mysql_db{//--------------------------------------------------------------------------------------mysql数据库操作类
	function on($onServer,$onUserName,$onPassWord,$onDataBase){
		$this->c=mysql_connect($onServer,$onUserName,$onPassWord);
		if(!$this->c){die("抱歉，数据库无法打开！<script>window.status='抱歉，数据库无法打开！';</script>");}
		mysql_query("SET NAMES 'utf8'");
		mysql_select_db($onDataBase,$this->c);
	}
	function query($querySQL){
		return mysql_query($querySQL,$this->c);
	}
	function fetch($fetchRecordSource){
		return mysql_fetch_array($fetchRecordSource);
	}
	function seek($seekSQL){$seekField="";
		list(,$seekField)=explode(" ",$seekSQL);
		$seekSQL=mysql_query($seekSQL,$this->c);
		$seekSQL=mysql_fetch_array($seekSQL);
		return $seekSQL[$seekField];
	}
	function sum($sumRecordSource){
		return mysql_num_rows($sumRecordSource);
	}
	function move($moveRecordSource,$moveRowNumber){
		if(mysql_num_rows($moveRecordSource)){mysql_data_seek($moveRecordSource,$moveRowNumber);}
	}
	function run($runSQL){
		return mysql_query($runSQL);
	}
	function off(){
		mysql_close($this->c);
	}
}
?>