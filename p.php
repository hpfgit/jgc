<script src="<?=$dir?>/js/jquery.js"></script> 
<? switch($t){default:?>
<? function pa_______________________________________________________(){}?>
<? break;case"paDel":function paDel_________________(){}?>
<?
    	list($tab,$delContent,$id)=explode(",",$g);
   // 	list($tab,$id)=explode(",",$g);
		switch($tab){default:
			break;case"taAtc":$tab="atc";
			break;case"taWare":$tab="ware";
			break;case"taZzry":$tab="Zzry";
		break;}
		$d->run("insert into log1 (content1,date1,name1,tab1,logId,ip1,kdlog1)values('$delContent',now(),'".$sa["adm"]."','$tab','$id','".ip_()."','删除')");
		$d->run("delete from $tab where id1=$id");
		die("<script>alert('删除成功');top.right.location.reload();</script>");
	?>
<? break;case"paZzry":function paZzry________________(){}?>
<? $f0=$d->fetch($d->query("select * from Zzry where id1=$g")) or $f0="";
	if($pact=="act"){
		$pturn1=(int)$pturn1;
		if($pimage1==""){die("<script>alert('抱歉，请上传图片！')</script>");}
		if($f0==""){
			$d->run("insert into zzry(turn1,image1,date1)values($pturn1,'$pimage1',now())");
		}else{
			$d->run("update zzry set turn1=$pturn1,content1='$pcontent1',image1='$pimage1',date1=now() where id1=".$f0["id1"]);
		}
		die("<script>alert('恭喜，操作成功！');top.right.location=top.right.document.referrer;</script>");
	exit;}
?>
<form method="post" target="run">
        <input type="hidden" name="act" value="act" />
    	排序：<input type="text" name="turn1" value="<?=$f0['turn1']?>" /><br><br>
		图片：<?=mod_("upLoad",array("inputId"=>"image1","inputValue"=>$f0["image1"],"allowExt"=>"jpg;gif;","maxSize"=>"800000"));?><br /><br />
        <input type="submit" value="保存" />
        <input type="button" value="取消" onclick="top.right.location=top.right.document.referrer;" />
</form>
<? break;case"paAtc":function paAtc____________(){}?>
 <link rel="stylesheet" href="<?=$dir?>/htcss/pintuer.css">
 <link rel="stylesheet" href="<?=$dir?>/htcss/admin.css">
<? $f0=$d->fetch($d->query("select * from atc where id1=$g")) or $f0="";
	if($pact==" act"){
		$pturn1=(int)$pturn1;
		if($ptitle1==""){die("<script>alert('抱歉，请填写标题！');</script>");}
		if($pcontent1==""){die("<script>alert('抱歉，请填写内容！')</script>");}
		if($f0==""){
			$d->run("insert into atc(turn1,title1,content1,date1)values($pturn1,'$ptitle1','$pcontent1',now())");
		}else{
			$d->run("update atc set turn1=$pturn1,title1='$ptitle1',content1='$pcontent1',date1=now() where id1=".$f0["id1"]);
		}
		die("<script>alert('恭喜，操作成功！');top.right.location=top.right.document.referrer;</script>");
	exit;}
?>
<form method="post" target="run">
        <input type="hidden" name="act" value="act" />
    	排序：<input type="text" name="turn1" value="<?=$f0['turn1']?>" /><br><br>
    	标题：<input type="text" name="title1" value="<?=$f0['title1']?>"style="width:300px;" /><br /><br />
        <?=mod_("edit",array("inputId"=>"content1","editWidth"=>"750","editHeight"=>"300","editValue"=>$f0["content1"]));?><br />
        <input type="submit" value="保存" />
        <input type="button" value="取消" onclick="top.right.location=top.right.document.referrer;" />
</form>
<? break;case"paWare":function paWare____________(){}?>
<? $f0=$d->fetch($d->query("select * from ware where id1=$g")) or $f0="";
	if($pact=="act"){
		$pturn1=(int)$pturn1;
		if($ptitle1==""){die("<script>alert('抱歉，请填写标题！');</script>");}
		if($pkdWare==""){die("<script>alert('抱歉，请选择内容！');</script>");}
		if($pcontent1==""){die("<script>alert('抱歉，请填写内容！')</script>");}
		if($pimage1==""){die("<script>alert('抱歉，请上传图片！')</script>");}
		if($pjg==""){die("<script>alert('抱歉，请填写价格！')</script>");}
		if($phyjg==""){die("<script>alert('抱歉，请填写会员价格！')</script>");}
		if($f0==""){
			$d->run("insert into ware(turn1,title1,kdWare,content1,jg,hyjg,image1,date1)values($pturn1,'$ptitle1','$pkdWare','$pcontent1','$pjg','$phyjg','$pimage1',now())");
		}else{
			$d->run("update ware set turn1=$pturn1,title1='$ptitle1',kdWare='$pkdWare',content1='$pcontent1',image1='$pimage1',date1=now() where id1=".$f0["id1"]);
		}
		die("<script>alert('恭喜，操作成功！');top.right.location=top.right.document.referrer;</script>");
	exit;}
?>
<form method="post" target="run">
        <input type="hidden" name="act" value="act" />
    	排序：<input type="text" name="turn1" value="<?=$f0['turn1']?>" /><br><br>
    	标题：<input type="text" name="title1" value="<?=$f0['title1']?>"style="width:300px;" /><br /><br />
		价格：<input type="text" name="jg" value="<?=$f0['jg']?>" style="width:100px;" />
        会员价格：<input type="text" name="hyjg" value="<?=$f0['hyjg']?>" style="width:100px;" /><br /><br />
        分类：<select name="kdWare">
        	<option value="">请选择..</option>
            <? $a=explode(";",$d->seek("select kdWare from admin")); for($i=0;$i<count($a);$i++){?>
				<option value="<?=$a[$i]?>" <? if($a[$i]==$f1["kdAtc1"]){echo "selected";}?>><?=$a[$i]?></option>
			<? }?>
            </select><br /><br />
		图片：<?=mod_("upLoad",array("inputId"=>"image1","inputValue"=>$f0["image1"],"allowExt"=>"jpg;gif;","maxSize"=>"800000"));?><br /><br />
        <?=mod_("edit",array("inputId"=>"content1","editWidth"=>"750","editHeight"=>"300","editValue"=>$f0["content1"]));?><br />
        <input type="submit" value="保存" />
        <input type="button" value="取消" onclick="top.right.location=top.right.document.referrer;" />
</form>
<? break;case"paCom":function paCom___________(){}?>
 <link rel="stylesheet" href="<?=$dir?>/htcss/pintuer.css">
 <link rel="stylesheet" href="<?=$dir?>/htcss/admin.css">
<style>
		body{text-align:left;}
    	font{font-size:14px; font-weight:bold;}
    </style>
	<? $f1=$d->fetch($d->query("select * from com where id1=$g"));
	$addlog=$pcontent;
		if($pact=="act"){
			$d->run("insert into log1 (name1,tab1,logId,kdlog1,ip1,content1,date1)values('".$sa["adm"]."','gsjj','7','修改','".ip_()."','$addlog',now())");	
			$d->run("update com set content1='$pcontent' where id1=$g");
			die("<script>alert('恭喜，内容修改成功！');run.location.reload()</script>");
		exit;}
	?>
    <font>《<?=$f1["title1"]?>》</font>
    <form method="post" target="run"><input d type="hidden" name="act" value="act" />
    	<?=mod_("edit",array("inputId"=>"content","editWidth"=>"750","editHeight"=>"500","editValue"=>$f1["content1"]));?><br />
        <input d type="submit" value="修改" style="width:50px; height:20px;" />
        <input d type="reset" value="重置" style="width:50px; height:20px;" />
    </form>
<? break;case"paExit":function paExit______________________(){}?>
<? $_SESSION["admId"]="";
	die("<script>top.location='".url_("pgJgc".date('Ymd')."")."';</script>");?>
<? break;case"paSlide":function paSlide_________________________(){}?>
 <link rel="stylesheet" href="<?=$dir?>/htcss/pintuer.css">
 <link rel="stylesheet" href="<?=$dir?>/htcss/admin.css">
<?
                if($pact=="act"){
                    if($pbanner1==""){die("<script>alert('抱歉，请上传幻灯片一！')</script>");}
                    if($pbanner2==""){die("<script>alert('抱歉，请上传幻灯片二！')</script>");}
                    if($pbanner3==""){die("<script>alert('抱歉，请上传幻灯片三！')</script>");}
							$d->run("update admin set banner1='$pbanner1',banner2='$pbanner2',banner3='$pbanner3',banner4='$pbanner4',banner5='$pbanner5',banner6='$pbanner6' where id=".$sa["id"]);
                       die("<script>alert('恭喜，操作成功！');top.right.location.reload();</script>");
                    exit;}
            ?>
        <form method="post" target="run"><input d type="hidden" name="act" value="act"/> 
            幻灯片一：<?=mod_("upLoad",array("inputId"=>"banner1","inputValue"=>$sa["banner1"],"allowExt"=>"jpg;","maxSize"=>"5120000"));?><br /><br />
            幻灯片二：<?=mod_("upLoad",array("inputId"=>"banner2","inputValue"=>$sa["banner2"],"allowExt"=>"jpg;","maxSize"=>"5120000"));?><br /><br />
            幻灯片三：<?=mod_("upLoad",array("inputId"=>"banner3","inputValue"=>$sa["banner3"],"allowExt"=>"jpg;","maxSize"=>"5120000"));?><br /><br />
            幻灯片四：<?=mod_("upLoad",array("inputId"=>"banner4","inputValue"=>$sa["banner4"],"allowExt"=>"jpg;","maxSize"=>"5120000"));?><br /><br />
            幻灯片五：<?=mod_("upLoad",array("inputId"=>"banner5","inputValue"=>$sa["banner5"],"allowExt"=>"jpg;","maxSize"=>"5120000"));?><br /><br />
            企业简介：<?=mod_("upLoad",array("inputId"=>"banner6","inputValue"=>$sa["banner6"],"allowExt"=>"jpg;","maxSize"=>"5120000"));?><br /><br />
            <input d type="submit" value="修改"/>
            <input d type="reset" value="重置"/>
        </form>
<? break;case"paPwd":function paPwd____________(){}?>
 <link rel="stylesheet" href="<?=$dir?>/htcss/pintuer.css">
 <link rel="stylesheet" href="<?=$dir?>/htcss/admin.css">
<?
if($pact=="act"){
	$addlog=$ppwd;
	if(md5($poldPwd)<>$sa["pwd"]){die("<script>alert('抱歉，原密码输入错误！')</script>");} 
	if($pnewPwd==""){die("<script>alert('抱歉，请输入密码！')</script>");}
	if($pnewPwd<>$prePwd){die("<script>alert('抱歉，两次密码不一致！')</script>");}
	$d->run("insert into log1 (name1,tab1,logId,kdlog1,ip1,content1,date1)values('".$sa["adm"]."','admin','1','修改','".ip_()."','$addlog',now())");	
	$d->run("update admin set pwd='".md5($pnewPwd)."' where id=".$sa["id"]);die("<script>alert('恭喜，密码修改成功！ 请重新登录！');top.right.location='".url_("paExit")."'</script>");
	}
?>
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-key"></span> 修改会员密码</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="">
    	<input type="hidden" name="act" value="act" />
      <div class="form-group">
        <div class="label">
          <label for="sitename">管理员帐号：</label>
        </div>
        <div class="field">
          <label style="line-height:33px;">
           admin
          </label>
        </div>
      </div>      
      <div class="form-group">
        <div class="label">
          <label for="sitename">原始密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" id="mpass" name="oldPwd" size="50" placeholder="请输入原始密码" data-validate="required:请输入原始密码" />       
        </div>
      </div>      
      <div class="form-group">
        <div class="label">
          <label for="sitename">新密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" name="newPwd" size="50" placeholder="请输入新密码" data-validate="required:请输入新密码,length#>=5:新密码不能小于5位" />         
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label for="sitename">确认新密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" name="rePwd" size="50" placeholder="请再次输入新密码" data-validate="required:请再次输入新密码,repeat#newpass:两次输入的密码不一致" />          
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>   
        </div>
      </div>      
    </form>
  </div>
</div>
<? break;case"paRight":function paRight______________(){}?>
 <link rel="stylesheet" href="<?=$dir?>/htcss/pintuer.css">
 <link rel="stylesheet" href="<?=$dir?>/htcss/admin.css">
<?
if($pact=="act"){
	$d->run("update admin set mobi='$pmobi',address='$paddress',tel='$ptel',bq1='$pbq1',gsm1='$pgsm1',kdWare='$pkdWare' where id=".$sa["id"]);
	die("<script>alert('恭喜，修改成功！');top.location='".url_("paIndex")."';</script>");
	}
?>
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 网站信息</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action=""><input type="hidden" name="act" value="act" />
      <div class="form-group">
        <div class="label">
          <label>传输协议：</label>
        </div>
        <div class="field">
          <input type="text" readonly="readonly"class="input" name="stitle" value="<?=$_SERVER['SERVER_PROTOCOL']?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>访问端口：</label>
        </div>
        <div class="field">
          <input type="text" id="url1" readonly="readonly" name="slogo" class="input tips" style="width:25%; float:left;" value="<?=$_SERVER['SERVER_PORT']?>" data-toggle="hover" data-place="right" data-image=""  />
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>网站域名：</label>
        </div>
        <div class="field">
          <input type="text" readonly="readonly" class="input" name="surl" value="<?=$_SERVER['HTTP_HOST']?>" />
        </div>
      </div>
      <div class="form-group" style="display:none">
        <div class="label">
          <label>站点物理路径：</label>
        </div>
        <div class="field">
          <input type="text" readonly="readonly"  class="input" name="sentitle" value="<?=$_SERVER['DOCUMENT_ROOT']?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>服务器环境：</label>
        </div>
        <div class="field">
          <input type="text" class="input" readonly="readonly"  name="skeywords" style="height:80px" value="<?=$_SERVER['SERVER_SOFTWARE']?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>执行脚本：</label>
        </div>
        <div class="field">
          <input type="text" readonly="readonly" class="input" name="sdescription" value="<?=$_SERVER['PHP_SELF']?>"></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>手机：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="tel" value="<?=$sa["tel"]?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>电话：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="mobi" value="<?=$sa["mobi"]?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>地址：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="address" value="<?=$sa["address"]?>" />
          <div class="tips"></div>
        </div>
      </div>  
      <div class="form-group">
        <div class="label">
          <label>版权所有：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="bq1" value="<?=$sa["bq1"]?>" />
          <div class="tips"></div>
        </div>
      </div>                
      <div class="form-group">
        <div class="label">
          <label>分类(用英文分号分开)：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="kdWare" value="<?=$sa["kdWare"]?>" />
          <div class="tips"></div>
        </div>
      </div>                
      <div class="form-group">
        <div class="label">
          <label>公司名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="gsm1" value="<?=$sa["gsm1"]?>" />
          <div class="tips"></div>
        </div>
      </div>                
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
<? break;case"paLeft":function paLeft___________(){}?>
 <link rel="stylesheet" href="<?=$dir?>/htcss/pintuer.css">
 <link rel="stylesheet" href="<?=$dir?>/htcss/admin.css">
<div class="leftnav">
  <h2><span class="icon-user"></span>基本设置</h2>
  <ul style="display:block">
        <li><a href="<?=url_("paRight")?>" target="right"><span class="icon-caret-right"></span>站点设置</a></li>
        <li><a href="<?=url_("paPwd")?>" target="right"><span class="icon-caret-right"></span>修改密码</a></li>
        <li><a href="<?=url_("paSlide")?>" target="right"><span class="icon-caret-right"></span>幻灯图片</a></li>  
        <li><a href="<?=url_("paExit")?>"><span class="icon-caret-right"></span>退出管理</a></li>   
  </ul>   
  <h2><span class="icon-pencil-square-o"></span>栏目管理</h2>
  <ul>
        <li><a href="<?=url_("paCom/1")?>" target="right">企业简介</a></li>
		<li><a href="<?=url_("taWare")?>" target="right">产品展示</a></li>
        <li><a href="<?=url_("taAtc")?>" target="right">新闻中心</a></li>
		<li><a href="<?=url_("taZzry")?>" target="right">资质荣誉</a></li>
        <li><a href="<?=url_("paCom/2")?>" target="right">联系我们</a></li>
  </ul>  
</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});
</script>
<? break;case"paHead":function paHead__________(){}?>
 <link rel="stylesheet" href="<?=$dir?>/htcss/pintuer.css">
 <link rel="stylesheet" href="<?=$dir?>/htcss/admin.css">
<script src="<?=$dir?>/js/jquery.js"></script>   
<div class="header bg-main" style="border:1px solid #f00; height:100px;">
    <div class="logo margin-big-left fadein-top">
        <h1><img src="<?=$dir?>/image/11.ico" class="radius-circle rotate-hover" height="50" alt=""  />后台管理中心</h1>
    </div>
    <div class="head-l">
        <a class="button button-little bg-green" href="<?=url_("pgIndex")?>" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;
        <a class="button button-little bg-red" href="<?=url_("paExit")?>"><span class="icon-power-off"></span> 退出登录</a>
    </div>
    <div class="leftnav-title">
        <span class="icon-list">菜单列表</span>
    </div>
	<div style="float:left;line-height:50px;padding-left:20px;border-bottom:1px solid #0E7FB9;height:49px;width:88.5%;margin-left:10px;color:#fff;">
		欢迎来到初阳建站后台管理页！
	</div>
</div>
 <style>
 	.bg-main{background:url(<?=$dir?>/image/bg.jpg); }
	.fadein-top>h1{color:#fff;}
	body{height:100px;}
 </style>
<? break;case"paIndex":function paIndex_______________(){}?>
 <link rel="stylesheet" href="<?=$dir?>/htcss/pintuer.css">
 <link rel="stylesheet" href="<?=$dir?>/htcss/admin.css">
<table id="paIndex" cellpadding="0" cellspacing="0">
    <tr><td colspan="2">	
    <div d><div d><div d><div d><div d>
		<?=ifr_("head",url_("paHead"),"style='width:100%;height:130px;'")?>
    </div></div></div></div></div>
    </td></tr>
    <tr><td style="vertical-align:top;">
		<?=ifr_("left",url_("paLeft")," style='width:200px;height:1000px;margin:-10px 0 0 -10px;background-color:#F2F9FD;border:1px solid #B5CFD9;'")?>
    </td><td style="vertical-align:top">
		<?=ifr_("right",url_("paRight")," style='width:100%;min-height:600px;float:left;")?>
    </td></tr>
    <tr><td colspan="2">
    <div d><div d><div d><div d><div d>
        <?=ifr_("tail",url_("paTail")," style='width:100%;'")?>
    </div></div></div></div></div>	
    </td></tr>
    </table>
	<style>		
    	#paIndex tr:first-child+tr>td:first-child{width:160px;padding:9px;}
     </style>
<? function pg_______________________________________________________(){}?>
<? break;case"pgJgc".date('Ymd')."": function pgAdmLogin__________________(){}?>
 <link rel="stylesheet" href="<?=$dir?>/htcss/pintuer.css">
 <link rel="stylesheet" href="<?=$dir?>/htcss/admin.css">
<style>
	body{background:url(<?=$dir?>/image/beijing1.jpg);}
</style>
<?
if($pact=="act"){
	if($padm==""){die("<script>alert('账号没有填写！');</script>");}	
	if($ppwd==""){die("<script>alert('密码没有填写！');</script>");}
	$r=$d->query("select * from admin where adm='".md5($padm)."' and pwd='".md5($ppwd)."' ");
	if($f=$d->fetch($r)){
		$_SESSION["admId"]=$f["id"];
		die("<script>top.location='".url_("paIndex")."';</script>");
	}else{
		die("<script>alert('账号或密码错误！');top.location.reload();</script>");	
	}
	exit;}
?>
<div class="container">
    <div class="line bouncein">
        <div class="xs6 xm4 xs3-move xm4-move">
            <div style="height:150px;"></div>
            <div class="media media-y margin-big-bottom">           
            </div>         
            <form method="post" target="run"><input type="hidden" name="act" value="act" />
            <div class="panel loginbox">
                <div class="text-center margin-big padding-big-top"><h1>后台管理中心</h1></div>
                <div class="panel-body" style="padding:30px; padding-bottom:10px; padding-top:10px;">
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="text" class="input input-big" name="adm" placeholder="登录账号" data-validate="required:请填写账号" />
                            <span class="icon icon-user margin-small" style="padding-top:10px"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="password" class="input input-big" name="pwd" placeholder="登录密码" data-validate="required:请填写密码" />
                            <span class="icon icon-key margin-small"  style="padding-top:10px"></span>
                        </div>
                    </div>
                	<div style="padding:30px;"><input type="submit" class="button button-block bg-main text-big input-big" value="登录"></div>
            	</div>
            </div>
            </form>          
        </div>
    </div>
<? break;case"pgIncHead":function pgIncHead________(){}?>
<script src="<?=$dir?>/js/jquery1.10.js"></script>
<script src="<?=$dir?>/js/myjs.js"></script>
<link type="text/css" rel="stylesheet" href="<?=$dir?>/css/shangzhan.css">
<? $f0=$d->fetch($d->query("select * from admin where id=1"))?>
<div class="header">
    <div class="login-wrap">
        <div class="public-container">
            <div class="login-index clearflex">
                <div class="left">
                    <span>欢迎来到我们的网站！</span>
                </div>
                <div class="right">
                    <span> 还不是会员？ </span>
                    <a href="">免费注册</a>
                    <span class="line">|</span>
                    <a href="">登录</a>
                </div>
            </div>
        </div>
    </div>
    <div class="public-container">
        <div class="search-index clearflex">
            <div class="logo-wrap left">
                <a href="<?=url_("pgIndex")?>" class="logo" style="background:url(<?=$dir?>/image/logo.png)"></a>
            </div>
            <div class="search-wrap left">
                <div class="input-search clearflex">
                    <input type="text" class="input-text" placeholder="  请输入关键字">
                    <input type="button" value="搜 索" class="input-botton">
                </div>
                <ul class="hot-search clearflex">
                    <li class="search-list">
                        <b>热门搜索：</b>
                    </li>
                    <? $a=explode(";",$d->seek("select kdWare from admin"));for($i=0;$i<count($a);$i++){?>
                    <li class="search-list">
                        <a href="<?=url_("pgWare")?>"><?=$a[$i]?></a>
                    </li>
					<? }?>
                </ul>
            </div>
            <div class="phone-wrap right">
                <a href=""><?=$f0["mobi"]?></a>
            </div>
        </div>
    </div>
</div>
<div class="nav">
    <div class="nav-wrap">
        <div class="public-container clearflex">
            <ul class="nav-item clearflex">
                <li class="nav-list goods-sort li-bg">
                    <a class="nav-list-index"  style="background: #000; font-size:16px;" href="<?=url_("pgWare")?>">全部商品分类</a>
                    <div style="display: none; border:1px  solid #f00; min-height:200px;" class="goods-index other-page">
                        <ul class="goods-item left">
							<? $a=explode(";",$d->seek("select kdWare from admin"));for($i=0;$i<count($a);$i++){?>
                                <li class="goods-list">
                                    <a class="goods-name" href="<?=url_("pgWare")?>"><?=$a[$i]?></a>
                                </li>
                            <? }?>
                    	</ul>
                    </div>
                </li>
                <li class="nav-list">
                    <a <? if($_GET["x"]=="pgIndex"){echo "t";}?> class="nav-list-index" style="font-size:14px;" href="<?=url_("pgIndex")?>">网站首页</a>
                </li>
                <li class="nav-list">
                    <a <? if($_GET["x"]=="pgCom/1"){echo "t";}?> class="nav-list-index" style="font-size:14px;" href="<?=url_("pgCom/1")?>">企业简介</a>
                </li>
                <li class="nav-list">
                    <a <? if($_GET["x"]=="pgWare"){echo "t";}?> class="nav-list-index" style="font-size:14px;" href="<?=url_("pgWare")?>">产品展示</a>
                </li>
                <li class="nav-list">
                    <a <? if($_GET["x"]=="pgAtc"){echo "t";}?> class="nav-list-index" style="font-size:14px;" href="<?=url_("pgAtc")?>" >新闻中心</a>
                </li>
                <li class="nav-list">
                    <a <? if($_GET["x"]=="pgZzry"){echo "t";}?> class="nav-list-index" style="font-size:14px;" href="<?=url_("pgZzry")?>">资质荣誉</a>
                </li>
                <li class="nav-list">
                    <a <? if($_GET["x"]=="pgCom/2"){echo "t";}?> class="nav-list-index" style="font-size:14px;" href="<?=url_("pgCom/2")?>">联系我们</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="banner">
    <div class="public-container">
    <? $f1=$d->fetch($d->query("select * from admin where id=1"))?>
        <img src="<?=ulf_($f1['banner6'])?>" width="100%" height="280" style="margin-bottom: 10px">
    </div>
</div>
<? break;case"pgIncBottom":function pgIncBottom_______(){}?>
<div class="footer">
    <div class="public-container">
        <div class="foot-main">
            <div class="foot-main-index">
                <ul>
                    <li>
                        <h4>关于我们</h4>
                    </li>
                    <li>
                        <a href="">注册协议</a>
                    </li>
                    <li>
                        <a href="">法律声明</a>
                    </li>
                    <li>
                        <a href="">联系我们</a>
                    </li>
                    <li>
                        <a href="">版权声明</a>
                    </li>
                </ul>
            </div>
            <div class="foot-main-index">
                <ul>
                    <li>
                        <h4>付款方式</h4>
                    </li>
                    <li>
                        <a href="">银行转账</a>
                    </li>
                    <li>
                        <a href="">在线支付</a>
                    </li>
                </ul>
            </div>
            <div class="foot-main-index">
                <ul>
                    <li>
                        <h4>购物指南</h4>
                    </li>
                    <li>
                        <a href="">常见问题议</a>
                    </li>
                    <li>
                        <a href="">购物流程</a>
                    </li>
                    <li>
                        <a href="">售后条款</a>
                    </li>
                </ul>
            </div>
            <div class="foot-main-index">
                <ul>
                    <li>
                        <h4>配送方式</h4>
                    </li>
                    <li>
                        <a href="">配送地区</a>
                    </li>
                    <li>
                        <a href="">配货中心</a>
                    </li>
                    <li>
                        <a href="">安全保密</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="border"></div>
        <div class="foot-foot">
            <div class="foot-view">
                <a href="">版权声明</a>&nbsp;|
                <a href="">联系方式</a>&nbsp;|
                <a href="">法律声明</a>&nbsp;|
                <a href="">注册协议</a>&nbsp;|
            </div>
			<? $f0=$d->fetch($d->query("select * from admin where id=1"))?>
            <div class="foot-index">
                <p style="color:#fff;">版权所有：<?=$f0["bq1"]?></p>
                <p style="color:#fff;">客服热线：查询热线<?=$f0["mobi"]?>；投诉建议热线：<?=$f0["mobi"]?></p>
            </div>
        </div>
    </div>
</div>
<? break;case"pgCom":function pgCom__________(){}?>
<? $f0=$d->fetch($d->query("select * from com where id1=$g")) or die("错误的ID");?>
<?=inc_("pgIncHead")?>
<div class="panel-new-index">
    <div class="public-container clearflex">
        <div class="left nav">
            <h3>商品分类</h3>
            <ul class="news-product-item">
			<? $a=explode(";",$d->seek("select kdWare from admin"));for($i=0;$i<count($a);$i++){?>
                <li class="news-product-list" style="text-align:center; font-size:16px;">
                <a href="<?=url_("pgWare")?>"><?=$a[$i]?></a>
                </li>
            <? }?>
            </ul>
        </div>
        <div class="right" style="width: 968px">
            <div class="position">
                您当前位置：<a href="<?=url_("pgIndex")?>" > 首页 </a> >> <a href="<?=url_("pgCom/1")?>"><?=$f0["title1"]?></a>
            </div>
            <div class="text-wrap">
            <?=$f0["content1"]?>
            </div>
        </div>
    </div>
</div>
<?=inc_("pgIncBottom")?>
<? break;case"pgZzry":function pgZzry_________(){}?>
<? $p=page_();?>
<? $f0=$d->fetch($d->query("select * from admin where id=1"))?>
<?=inc_("pgIncHead")?>
<div class="panel-new-index">
    <div class="public-container clearflex">
        <div class="left nav">
            <h3>商品分类</h3>
            <ul class="news-product-item">
			<? $a=explode(";",$d->seek("select kdWare from admin"));for($i=0;$i<count($a);$i++){?>
                <li class="news-product-list" style="text-align:center; font-size:16px;">
                <a href="<?=url_("pgWare")?>"><?=$a[$i]?></a>
                </li>
            <? }?>
            </ul>
        </div>
        <div class="right" style="width: 968px">
            <div class="position">
                您当前位置：<a href="index.html" > 首页 </a> >> <a href=""> 资质荣誉 </a>
            </div>
            <ul class="diploma-item clearflex">
        		<? $d->move($p["r"],($p["pageNo"]-1)*$p["pageSize"]);for($pgI=1;$pgI<$p["pageSize"]+1;$pgI++){if($f0=$d->fetch($p["r"])){?>
                    <li>
                        <a href="">
                            <img src="<?=ulf_($f0['image1'])?>">
                        </a>
                    </li>
                <? }}?>
            </ul>
        </div>
    </div>
</div>
<?=inc_("pgIncBottom")?>
<? break;case"pgAtc":function pgAtc_________(){}?>
<? $p=page_();?>
<?=inc_("pgIncHead")?>
<div class="panel-new-index">
    <div class="public-container clearflex">
        <div class="left nav">
            <h3>商品分类</h3>
            <ul class="news-product-item">
			<? $a=explode(";",$d->seek("select kdWare from admin"));for($i=0;$i<count($a);$i++){?>
                <li class="news-product-list" style="text-align:center; font-size:16px;">
                <a href="<?=url_("pgWare")?>"><?=$a[$i]?></a>
                </li>
            <? }?>
            </ul>
        </div>
        <div class="right" style="width: 968px">
            <div class="position">
                您当前位置：<a href="<?=url_("pgIndex")?>" > 首页 </a> >> <a href="<?=url_("pgAtc")?>"> 新闻中心 </a>
            </div>
            <ul class="news-wrap">
        		<? $d->move($p["r"],($p["pageNo"]-1)*$p["pageSize"]);for($pgI=1;$pgI<$p["pageSize"]+1;$pgI++){if($f0=$d->fetch($p["r"])){?>
                <li class="clearflex">
                    <a href="<?=url_("pgAtcShow/".$f0['id1'])?>"><?=$f0["title1"]?></a>
                    <span><?=$f0["date1"]?></span>
                </li>
                <? }}?>
            </ul>
        </div>
    </div>
</div>
<?=inc_("pgIncBottom")?>
<? break;case"pgAtcShow":function pgAtcShow______(){}?>
<?=inc_("pgIncHead")?>
<div class="panel-new-index">
    <div class="public-container clearflex">
        <div class="left nav">
            <h3>商品分类</h3>
            <ul class="news-product-item">
			<? $a=explode(";",$d->seek("select kdWare from admin"));for($i=0;$i<count($a);$i++){?>
                <li class="news-product-list" style="text-align:center; font-size:16px;">
                <a href="<?=url_("pgWare")?>"><?=$a[$i]?></a>
                </li>
            <? }?>
            </ul>
        </div>
        <div class="right" style="width: 968px">
				<? $f0=$d->fetch($d->query("select * from atc where id1=$g"))?>
            <div class="position">
                您当前位置：<a href="<?=url_("pgIndex")?>" > 首页 </a> >> <a href="<?=url_("pgAtc")?>"> 新闻中心 </a> >> <a href="<?=url_("pgAtcShow/".$f0['id1'])?>"> 详细页 </a>
            </div>
            <div class="text-wrap">
                <h3><?=$f0["title1"]?></h3>
                <p><?=$f0["content1"]?></p>
            </div>
        </div>
    </div>
</div>
<?=inc_("pgIncBottom")?>
<? break;case"pgWare":function pgWare______(){}?>
<?=inc_("pgIncHead")?>
<? $p=page_();?>
<div class="panel-new-index">
    <div class="public-container clearflex">
        <div class="left nav">
            <h3>商品分类</h3>
            <ul class="news-product-item">
			<? $a=explode(";",$d->seek("select kdWare from admin"));for($i=0;$i<count($a);$i++){?>
                <li class="news-product-list" style="text-align:center; font-size:16px;">
                <a href="<?=url_("pgWare")?>"><?=$a[$i]?></a>
                </li>
            <? }?>
            </ul>
        </div>
        <div class="right" style="width: 968px">
            <div class="position">
                您当前位置：<a href="<?=url_("pgIndex")?>" > 首页 </a> >> <a href="<?=url_("pgWare")?>"> 产品展示 </a>
            </div>
			<? $d->move($p["r"],($p["pageNo"]-1)*$p["pageSize"]);for($pgI=1;$pgI<$p["pageSize"]+1;$pgI++){if($f0=$d->fetch($p["r"])){?>
            <dl class="news-product-wrap">
                <dt><a href=""><img src="<?=ulf_($f0['image1'])?>"></a></dt>
                <dd><a href=""><?=$f0["title1"]?></a></dd>
                <dd>
                    <span class="price"><strong style="color:#f00;">￥<?=$f0["jg"]?>元</strong></span>
                    <span class="points"><strong style="color:#f00;">￥<?=$f0["hyjg"]?>元</strong></span>
                </dd>
            </dl>
            <? }}?>
            <div class="page-num">
                <span> 共 <strong> <?=$p["pageSize"]?> </strong> 条记录 </span>
                <a href="<?=url_("$t/1,".$p["pageSize"].",".$p["pageKey"])?>" title="首页"> 首页 </a>
                <a href="<?=url_("$t/".($p["pageNo"]-1).",".$p["pageSize"].",".$p["pageKey"])?>"title="上一页"> 上一页 </a>
                <a href="<?=url_("$t/".($p["pageNo"]+1).",".$p["pageSize"].",".$p["pageKey"])?>"title="下一页">  下一页 </a>
                <a href="<?=url_("$t/".$p["pageCount"].",".$p["pageSize"].",".$p["pageKey"])?>"title="末页"> 尾页 </a>
                <span> 第 <strong> <?=$p["pageNo"]?> </strong> 页 </span>
            </div>
        </div>
    </div>
</div>
<?=inc_("pgIncBottom")?>
<? break;case"pgIndex":function pgIndex_____(){}?>
<? $p=page_();?>
<link type="text/css" rel="stylesheet" href="<?=$dir?>/css/shangzhan.css">
<div class="header">
    <div class="login-wrap">
        <div class="public-container">
            <div class="login-index clearflex">
                <div class="left">
                    <span>欢迎来到我们的网站！</span>
                </div>
                <div class="right">
                    <span> 还不是会员？ </span>
                    <a href="">免费注册</a>
                    <span class="line">|</span>
                    <a href="">登录</a>
                </div>
            </div>
        </div>
    </div>
    <div class="public-container">
        <div class="search-index clearflex">
            <div class="logo-wrap left">
                <a href="<?=url_("pgIndex")?>" class="logo"></a>
            </div>
            <div class="search-wrap left">
                <div class="input-search clearflex">
                    <input type="text" class="input-text" placeholder="  请输入关键字">
                    <input type="button" value="搜 索" class="input-botton">
                </div>
                <ul class="hot-search clearflex">
                    <li class="search-list">
                        <b>热门搜索：</b>
                    </li>
                    <? $a=explode(";",$d->seek("select kdWare from admin"));for($i=0;$i<count($a);$i++){?>
                    <li class="search-list">
                        <a href="<?=url_("pgWare")?>"><?=$a[$i]?></a>
                    </li>
					<? }?>
                </ul>
            </div>
            <div class="phone-wrap right">
                <a href=""><?=$sa["mobi"]?></a>
            </div>
        </div>
    </div>
</div>
<div class="nav">
    <div class="nav-wrap">
        <div class="public-container clearflex">
            <ul class="nav-item clearflex">
                <li class="nav-list goods-sort li-bg">
                    <a class="nav-list-index" href="<?=url_("pgWare")?>" style="font-size:16px;">全部商品分类</a>
                </li>
                <li class="nav-list">
                    <a <? if($_GET["x"]=="pgIndex"){echo "t";}?> class="nav-list-index" href="<?=url_("pgIndex")?>" style="font-size:14px;">网站首页</a>
                </li>
                <li class="nav-list">
                    <a <? if($_GET["x"]=="pgCom/1"){echo "t";}?> class="nav-list-index" href="<?=url_("pgCom/1")?>" style="font-size:14px;">企业简介</a>
                </li>
                <li class="nav-list">
                    <a <? if($_GET["x"]=="pgWare"){echo "t";}?> class="nav-list-index" href="<?=url_("pgWare")?>" style="font-size:14px;">产品展示</a>
                </li>
                <li class="nav-list">
                    <a <? if($_GET["x"]=="pgAtc"){echo "t";}?> class="nav-list-index" href="<?=url_("pgAtc")?>" style="font-size:14px;">新闻中心</a>
                </li>
                <li class="nav-list">
                    <a <? if($_GET["x"]=="pgZzry"){echo "t";}?> class="nav-list-index" href="<?=url_("pgZzry")?>" style="font-size:14px;">资质荣誉</a>
                </li>
                <li class="nav-list">
                    <a <? if($_GET["x"]=="pgCom/2"){echo "t";}?> class="nav-list-index" href="<?=url_("pgCom/2")?>" style="font-size:14px;">联系我们</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="public-container clearflex">
        <div class="left">
            <div class="goods-index" style="height:400px;">
                <ul class="goods-item left">
                    <? $a=explode(";",$d->seek("select kdWare from admin"));for($i=0;$i<count($a);$i++){?>
                    <li class="goods-list">
                        <a class="goods-name" href="<?=url_("pgWare")?>"><?=$a[$i]?></a>
                    </li>
                    <? }?>
                </ul>
            </div>
        </div>
        <? $f9=$d->fetch($d->query("select * from admin where id=1"))?>
        <div class="img-container clearflex right">
            <ul class=" img-wrap ">
                <img src="<?=ulf_($f9['banner1'])?>">
                <img src="<?=ulf_($f9['banner2'])?>">
                <img src="<?=ulf_($f9['banner3'])?>">
                <img src="<?=ulf_($f9['banner4'])?>">
                <img src="<?=ulf_($f9['banner5'])?>">
            </ul>
            <div class="index-wrap">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</div>
<div></div>
<div class="panel">
    <div class="public-container">
        <div class="view">
            <h2 style="line-height: 57px;padding-left: 25px;">1F 热卖产品</h2>
            <a href="<?=url_("pgWare")?>">更多商品>></a>
        </div>
        <div class="panel-index clearflex">
            <div class="left">
                <p class="hot-bang">热销排行榜</p>
                <ul class="hot-item">
                <? $a1=$d->fetch($d->query("select * from ware where kdWare='保健茶' limit 1"))?>
                    <li class="hot-list li-active">
                        <p class="title title-active"><?=$a1["title1"]?></p>
                        <div class="hot-view view-active">
                            <span class="index">1</span>
                            <a href="<?=url_("pgWare")?>" class="clearflex">
                                <img src="<?=ulf_($a1['image1'])?>" width="65" height="85">
                                <div class="right">
                                    <p><?=$a1["kdWare"]?></p>
                                    <p class="price">￥<?=$a1["jg"]?></p>
                                </div>
                            </a>
                        </div>
                    </li>
                <? $a2=$d->fetch($d->query("select * from ware where kdWare='养生茶' limit 1"))?>
                    <li class="hot-list">
                        <p class="title"><?=$a2["title1"]?></p>
                        <div class="hot-view">
                            <span class="index">2</span>
                            <a href="<?=url_("pgWare")?>" class="clearflex">
                                <img src="<?=ulf_($a1['image1'])?>" width="65" height="85">
                                <div class="right">
                                    <p><?=$a2["kdWare"]?></p>
                                    <p class="price">￥<?=$a2["jg"]?></p>
                                </div>
                            </a>
                        </div>
                    </li>
                <? $a3=$d->fetch($d->query("select * from ware where kdWare='热卖产品' limit 1"))?>
                    <li class="hot-list">
                        <p class="title"><?=$a3["title1"]?></p>
                        <div class="hot-view">
                            <span class="index">2</span>
                            <a href="<?=url_("pgWare")?>" class="clearflex">
                                <img src="<?=ulf_($a3['image1'])?>" width="65" height="85">
                                <div class="right">
                                    <p><?=$a3["kdWare"]?></p>
                                    <p class="price">￥<?=$a3["jg"]?></p>
                                </div>
                            </a>
                        </div>
                    </li>
                <? $a4=$d->fetch($d->query("select * from ware where kdWare='新品上市' limit 1"))?>
                    <li class="hot-list">
                        <p class="title"><?=$a4["title1"]?></p>
                        <div class="hot-view">
                            <span class="index">2</span>
                            <a href="<?=url_("pgWare")?>" class="clearflex">
                                <img src="<?=ulf_($a4['image1'])?>" width="65" height="85">
                                <div class="right">
                                    <p><?=$a4["kdWare"]?></p>
                                    <p class="price">￥<?=$a4["jg"]?></p>
                                </div>
                            </a>
                        </div>
                    </li>
                <? $a5=$d->fetch($d->query("select * from ware where kdWare='特卖商品' limit 1"))?>
                    <li class="hot-list">
                        <p class="title"><?=$a5["title1"]?></p>
                        <div class="hot-view">
                            <span class="index">2</span>
                            <a href="<?=url_("pgWare")?>" class="clearflex">
                                <img src="<?=ulf_($a5['image1'])?>" width="65" height="85">
                                <div class="right">
                                    <p><?=$a5["kdWare"]?></p>
                                    <p class="price">￥<?=$a5["jg"]?></p>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="right clearflex" style="width: 980px;margin-bottom: 15px">
        		<? $r=$d->query("select * from ware where kdWare='热卖产品' order by turn1 desc"); for($pgI=1;$pgI<$p["pageSize"]+1;$pgI++){if($f0=$d->fetch($r)){?>
                	<dl class="dlist">
                    <dt class="dt-index">
                        <a href="<?=url_("pgWare")?>" style="display: inline-block;width: 100%;height: 100%">
                            <img src="<?=ulf_($f0['image1'])?>">
                        </a>
                    </dt>
                    <dd class="ptit">
                        <a href="<?=url_("pgWare")?>"target="_blank"><?=$f0['title1']?></a>
                    </dd>
                    <dd style="width:100%;">
                        <span class="mprice">市场价:<strong class="price" style="color:#f00;">￥<?=$f0["jg"]?></strong></span>
                        <span class="hprice">会员价:<strong class="price" style="color:#f00;">￥<?=$f0["hyjg"]?></strong></span>
                    </dd>
                </dl>
                <? }}?>
            </div>
        </div>
    </div>
</div>
<div class="panel">
    <div class="public-container">
        <div class="view">
            <h2 style="line-height: 57px;padding-left: 25px;">2F 新品上市</h2>
            <a href="<?=url_("pgWare")?>">更多商品>></a>
        </div>
        <div class="panel-index clearflex">
            <div class="left">
                <p class="hot-bang">热销排行榜</p>
                <ul class="hot-item">
                <? $a1=$d->fetch($d->query("select * from ware where kdWare='保健茶' limit 1"))?>
                    <li class="hot-list li-active">
                        <p class="title title-active"><?=$a1["title1"]?></p>
                        <div class="hot-view view-active">
                            <span class="index">1</span>
                            <a href="<?=url_("pgWare")?>" class="clearflex">
                                <img src="<?=ulf_($a1['image1'])?>" width="65" height="85">
                                <div class="right">
                                    <p><?=$a1["kdWare"]?></p>
                                    <p class="price">￥<?=$a1["jg"]?></p>
                                </div>
                            </a>
                        </div>
                    </li>
                <? $a2=$d->fetch($d->query("select * from ware where kdWare='养生茶' limit 1"))?>
                    <li class="hot-list">
                        <p class="title"><?=$a2["title1"]?></p>
                        <div class="hot-view">
                            <span class="index">2</span>
                            <a href="<?=url_("pgWare")?>" class="clearflex">
                                <img src="<?=ulf_($a1['image1'])?>" width="65" height="85">
                                <div class="right">
                                    <p><?=$a2["kdWare"]?></p>
                                    <p class="price">￥<?=$a2["jg"]?></p>
                                </div>
                            </a>
                        </div>
                    </li>
                <? $a3=$d->fetch($d->query("select * from ware where kdWare='热卖产品' limit 1"))?>
                    <li class="hot-list">
                        <p class="title"><?=$a3["title1"]?></p>
                        <div class="hot-view">
                            <span class="index">2</span>
                            <a href="<?=url_("pgWare")?>" class="clearflex">
                                <img src="<?=ulf_($a3['image1'])?>" width="65" height="85">
                                <div class="right">
                                    <p><?=$a3["kdWare"]?></p>
                                    <p class="price">￥<?=$a3["jg"]?></p>
                                </div>
                            </a>
                        </div>
                    </li>
                <? $a4=$d->fetch($d->query("select * from ware where kdWare='新品上市' limit 1"))?>
                    <li class="hot-list">
                        <p class="title"><?=$a4["title1"]?></p>
                        <div class="hot-view">
                            <span class="index">2</span>
                            <a href="<?=url_("pgWare")?>" class="clearflex">
                                <img src="<?=ulf_($a4['image1'])?>" width="65" height="85">
                                <div class="right">
                                    <p><?=$a4["kdWare"]?></p>
                                    <p class="price">￥<?=$a4["jg"]?></p>
                                </div>
                            </a>
                        </div>
                    </li>
                <? $a5=$d->fetch($d->query("select * from ware where kdWare='特卖商品' limit 1"))?>
                    <li class="hot-list">
                        <p class="title"><?=$a5["title1"]?></p>
                        <div class="hot-view">
                            <span class="index">2</span>
                            <a href="<?=url_("pgWare")?>" class="clearflex">
                                <img src="<?=ulf_($a5['image1'])?>" width="65" height="85">
                                <div class="right">
                                    <p><?=$a5["kdWare"]?></p>
                                    <p class="price">￥<?=$a5["jg"]?></p>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="right clearflex" style="width: 980px;margin-bottom: 15px">
        		<? $r=$d->query("select * from ware where kdWare='新品上市' order by turn1 desc"); for($pgI=1;$pgI<$p["pageSize"]+1;$pgI++){if($f3=$d->fetch($r)){?>
                	<dl class="dlist">
                    <dt class="dt-index">
                        <a href="<?=url_("pgWare")?>" style="display: inline-block;width: 100%;height: 100%">
                            <img src="<?=ulf_($f3['image1'])?>">
                        </a>
                    </dt>
                    <dd class="ptit">
                        <a href="<?=url_("pgWare")?>"target="_blank"><?=$f3['title1']?></a>
                    </dd>
                    <dd style="width:100%;">
                        <span class="mprice">市场价:<strong class="price" style="color:#f00;">￥<?=$f3["jg"]?></strong></span>
                        <span class="hprice">会员价:<strong class="price" style="color:#f00;">￥<?=$f3["hyjg"]?></strong></span>
                    </dd>
                </dl>
                <? }}?>
            </div>
        </div>
    </div>
</div>
<div class="panel">
    <div class="public-container">
        <div class="view">
            <h2 style="line-height: 57px;padding-left: 25px;">3F 特卖产品</h2>
            <a href="<?=url_("pgWare")?>">更多商品>></a>
        </div>
        <div class="panel-index clearflex">
            <div class="left">
                <p class="hot-bang">热销排行榜</p>
                <ul class="hot-item">
                <? $a1=$d->fetch($d->query("select * from ware where kdWare='保健茶' limit 1"))?>
                    <li class="hot-list li-active">
                        <p class="title title-active"><?=$a1["title1"]?></p>
                        <div class="hot-view view-active">
                            <span class="index">1</span>
                            <a href="<?=url_("pgWare")?>" class="clearflex">
                                <img src="<?=ulf_($a1['image1'])?>" width="65" height="85">
                                <div class="right">
                                    <p><?=$a1["kdWare"]?></p>
                                    <p class="price">￥<?=$a1["jg"]?></p>
                                </div>
                            </a>
                        </div>
                    </li>
                <? $a2=$d->fetch($d->query("select * from ware where kdWare='养生茶' limit 1"))?>
                    <li class="hot-list">
                        <p class="title"><?=$a2["title1"]?></p>
                        <div class="hot-view">
                            <span class="index">2</span>
                            <a href="<?=url_("pgWare")?>" class="clearflex">
                                <img src="<?=ulf_($a1['image1'])?>" width="65" height="85">
                                <div class="right">
                                    <p><?=$a2["kdWare"]?></p>
                                    <p class="price">￥<?=$a2["jg"]?></p>
                                </div>
                            </a>
                        </div>
                    </li>
                <? $a3=$d->fetch($d->query("select * from ware where kdWare='热卖产品' limit 1"))?>
                    <li class="hot-list">
                        <p class="title"><?=$a3["title1"]?></p>
                        <div class="hot-view">
                            <span class="index">2</span>
                            <a href="" class="clearflex">
                                <img src="<?=ulf_($a3['image1'])?>" width="65" height="85">
                                <div class="right">
                                    <p><?=$a3["kdWare"]?></p>
                                    <p class="price">￥<?=$a3["jg"]?></p>
                                </div>
                            </a>
                        </div>
                    </li>
                <? $a4=$d->fetch($d->query("select * from ware where kdWare='新品上市' limit 1"))?>
                    <li class="hot-list">
                        <p class="title"><?=$a4["title1"]?></p>
                        <div class="hot-view">
                            <span class="index">2</span>
                            <a href="<?=url_("pgWare")?>" class="clearflex">
                                <img src="<?=ulf_($a4['image1'])?>" width="65" height="85">
                                <div class="right">
                                    <p><?=$a4["kdWare"]?></p>
                                    <p class="price">￥<?=$a4["jg"]?></p>
                                </div>
                            </a>
                        </div>
                    </li>
                <? $a5=$d->fetch($d->query("select * from ware where kdWare='特卖商品' limit 1"))?>
                    <li class="hot-list">
                        <p class="title"><?=$a5["title1"]?></p>
                        <div class="hot-view">
                            <span class="index">2</span>
                            <a href="<?=url_("pgWare")?>" class="clearflex">
                                <img src="<?=ulf_($a5['image1'])?>" width="65" height="85">
                                <div class="right">
                                    <p><?=$a5["kdWare"]?></p>
                                    <p class="price">￥<?=$a5["jg"]?></p>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="right clearflex" style="width: 980px;margin-bottom: 15px">
        		<? $r=$d->query("select * from ware where kdWare='特卖商品' order by turn1 desc"); for($pgI=1;$pgI<$p["pageSize"]+1;$pgI++){if($f2=$d->fetch($r)){?>
                	<dl class="dlist">
                    <dt class="dt-index">
                        <a href="<?=url_("pgWare")?>" style="display: inline-block;width: 100%;height: 100%">
                            <img src="<?=ulf_($f2['image1'])?>">
                        </a>
                    </dt>
                    <dd class="ptit">
                        <a href="<?=url_("pgWare")?>"target="_blank"><?=$f2['title1']?></a>
                    </dd>
                    <dd style="width:100%;">
                        <span class="mprice">市场价:<strong class="price" style="color:#f00;">￥<?=$f2["jg"]?></strong></span>
                        <span class="hprice">会员价:<strong class="price" style="color:#f00;">￥<?=$f2["hyjg"]?></strong></span>
                    </dd>
                </dl>
                <? }}?>
            </div>
        </div>
    </div>
</div>
<div class="banner">
    <div class="public-container" style="position: relative">
        <h4>NEWS 新品上架专区专区</h4>
       <div class="news-goods-wrap">
           <ul class="news-goods-item clearflex">
        		<? $r=$d->query("select * from ware order by date1 desc limit 10"); for($pgI=1;$pgI<$p["pageSize"]+1;$pgI++){if($f1=$d->fetch($r)){?>
                   <li class="news-goods-list">
                       <a href="<?=url_("pgWare")?>">
                           <img style="" src="<?=ulf_($f1['image1'])?>">
                       </a>
                   </li>
               <? }}?>
           </ul>
           <div class="left-btn">
               <span></span>
           </div>
           <div class="right-btn">
               <span></span>
           </div>
       </div>
    </div>
</div>
<?=inc_("pgIncBottom")?>
<script src="<?=$dir?>/js/jquery1.10.js"></script>
<script src="<?=$dir?>/js/myjs.js"></script>
<? break;}?>
























