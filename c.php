<? $dir=mb_substr($_SERVER['PHP_SELF'],1,strrpos($_SERVER['PHP_SELF'],"/")-1,"utf-8");?>
s="";document.write("<style>");
<? switch($_GET["t"]){default:?>
<? break;case"pgIncHead":?>
	s+=".nav-list>a[t]{background:#000}"
<? break;case"pgIndex":?>
	s+=".nav-list>a[t]{background:#000}"
<? break;}?>
document.write(s+"</style>");