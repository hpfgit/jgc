 <link rel="stylesheet" href="<?=$dir?>/htcss/pintuer.css">
 <link rel="stylesheet" href="<?=$dir?>/htcss/admin.css">
 <script src="<?=$dir?>/js/jquery.js"></script>   
<? $p=page_();?>
<? switch($t){default:?>
<? break;case"taZzry":function taZzry_______________(){}?>
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder">业务</strong></div>
    <div class="padding border-bottom">
      <ul class="search">
        <li>
            <li> <a class="button border-main icon-plus-square-o" href="<?=url_("paZzry")?>"> 添加荣誉</a> </li>
            <li></li>
        </li>
      </ul>
    </div>
    <table class="table table-hover text-center">
        <tr>
			<th>排序</th>
            <th>图片</th>
            <th>日期</th>
            <th>操作</th>
        </tr>
        <? $d->move($p["r"],($p["pageNo"]-1)*$p["pageSize"]);for($pgI=1;$pgI<$p["pageSize"]+1;$pgI++){if($f0=$d->fetch($p["r"])){?>
            <tr>
            	<td><?=$f0["turn1"]?></td>
                <td><img src="<?=ulf_($f0['image1'])?>" style="width:80px; height:60px;" /></td>
                <td><?=$f0["date1"]?></td>
                <td style="width:300px;">
					<div class="button-group"> 
                    <a class="button border-main" href="<?=url_("paWare/".$f0["id1"])?>"><span class="icon-edit"></span> 修改</a>
                     <a class="button border-red" href="<?=url_("paDel/$t,".$delContent.",".$f0["id1"])?>" onclick="return confirm('您确定要删除该条信息吗？');" target="run"><span class="icon-trash-o"></span>删除</a>
                    </div>
				</td>
            </tr>
        <? }}?>
</table>
<? break;case"taAtc":function taAtc________(){}?>
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder">业务</strong></div>
    <div class="padding border-bottom">
      <ul class="search">
        <li>
            <li> <a class="button border-main icon-plus-square-o" href="<?=url_("paAtc")?>"> 添加新闻</a> </li>
        </li>
      </ul>
    </div>
    <table class="table table-hover text-center">
        <tr>
			<th>排序</th>
            <th>标题</th>
            <th>日期</th>
            <th>操作</th>
        </tr>
        <? $d->move($p["r"],($p["pageNo"]-1)*$p["pageSize"]);for($pgI=1;$pgI<$p["pageSize"]+1;$pgI++){if($f0=$d->fetch($p["r"])){?>
            <tr>
            	<td><?=$f0["turn1"]?></td>
                <td><?=$f0["title1"]?></td>
                <td><?=$f0["date1"]?></td>
                <td style="width:300px;">
					<div class="button-group"> 
                    <a class="button border-main" href="<?=url_("paAtc/".$f0["id1"])?>"><span class="icon-edit"></span> 修改</a>
                     <a class="button border-red" href="<?=url_("paDel/$t,".$delContent.",".$f0["id1"])?>" onclick="return confirm('您确定要删除该条信息吗？');" target="run"><span class="icon-trash-o"></span>删除</a>
                    </div>
				</td>
            </tr>
        <? }}?>
</table>
<? break;case"taWare":function taWare_____(){}?>
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder">业务</strong></div>
    <div class="padding border-bottom">
      <ul class="search">
        <li>
            <li> <a class="button border-main icon-plus-square-o" href="<?=url_("paWare")?>"> 添加产品</a> </li>
            <li>
                <select onchange="window.location='/?x=taWare/1,<?=$p["pageSize"]?>,'+this.value;">
                    <option value="">请选择...</option>
                    <? $a=explode(";",$d->seek("select kdWare from admin"));for($i=0;$i<count($a);$i++){?>
                        <option value="<?=$a[$i]?>"<? if($a[$i]==$p["pageKey"]){echo "selected";}?>><?=$a[$i]?></option>
                    <? }?>
                </select>
            </li>
        </li>
      </ul>
    </div>
    <table class="table table-hover text-center">
        <tr>
			<th>排序</th>
            <th>标题</th>
            <th>价格</th>
            <th>会员价格</th>
            <th>分类</th>
            <th>日期</th>
            <th>操作</th>
        </tr>
        <? $d->move($p["r"],($p["pageNo"]-1)*$p["pageSize"]);for($pgI=1;$pgI<$p["pageSize"]+1;$pgI++){if($f0=$d->fetch($p["r"])){?>
            <tr>
            	<td><?=$f0["turn1"]?></td>
                <td><?=$f0["title1"]?></td>
                <td><?=$f0["jg"]?></td>
                <td><?=$f0["hyjg"]?></td>
                <td><?=$f0["kdWare"]?></td>
                <td><?=$f0["date1"]?></td>
                <td style="width:300px;">
					<div class="button-group"> 
                    <a class="button border-main" href="<?=url_("paWare/".$f0["id1"])?>"><span class="icon-edit"></span> 修改</a>
                     <a class="button border-red" href="<?=url_("paDel/$t,".$delContent.",".$f0["id1"])?>" onclick="return confirm('您确定要删除该条信息吗？');" target="run"><span class="icon-trash-o"></span>删除</a>
                    </div>
				</td>
            </tr>
        <? }}?>
</table>
<? break;}?>
<div d class="pagelist">
        <a href="<?=url_("$t/1,".$p["pageSize"].",".$p["pageKey"])?>" title="首页">&lt;&lt;</a>     
        <a href="<?=url_("$t/".($p["pageNo"]-1).",".$p["pageSize"].",".$p["pageKey"])?>"title="上一页">&lt;</a>  
		<a href="<?=url_("$t/".($p["pageNo"]+1).",".$p["pageSize"].",".$p["pageKey"])?>"title="下一页">&gt;</a>
        <a href="<?=url_("$t/".$p["pageCount"].",".$p["pageSize"].",".$p["pageKey"])?>"title="末页">&gt;&gt;</a>       
        <a href="#" title="跳转到指定的页码" onclick="x=prompt('跳转到指定的页面','');if(x==''||x==null||0+parseInt(x)<1){return false;}window.location='?x=<?=$t?>/'+x+',<?=$p["pageSize"]?>,<?=$p["pageKey"]?>'"><?=$p["pageNo"]?></a>
        <a href="#" title="点击设置每页信息量" onclick="x=prompt('请输入每页的信息量','');if(x==''||x==null||0+parseInt(x)<1){return false;}window.location='?x=<?=$t?>/<?=$p["pageNo"]?>,'+x+',<?=$p["pageKey"]?>'"><?=$p["pageSize"]?></a>
        <a href="#" title="当前是<?=$p["pageNo"]?>页，本页一共<?=$p["pageSize"]?>条信息，共<?=$p["pageCount"]?>页"><?=$p["pageNo"]?>/<?=$p["pageCount"]?></a>
</div>
	<style>table{ background:#000; margin:5px 0 5px 0;}
	table tr{ background:#fff;}
	table td{ padding:5px;}
	body>iframe:first-child+div{ height:35px; background:#bbb; border:0; border-bottom:1px solid #000;}
	body>iframe:first-child+div>a{ border:1px solid #000; text-align:center; background:#999; float:right; margin:6px 10px 0 0; min-width:18px; font-weight:bold; padding:3px;}
	body>iframe:first-child+div>a:hover{background:#ffb;}
	body>iframe:first-child+div+div{ position:absolute; top:7px; left:10px;}
	body>iframe:first-child+div+div+table+div{ height:35px; background:#bbb; border:0; border-top:1px solid #000;}
	body>iframe:first-child+div+div+table+div>a{ border:1px solid #000; text-align:center; background:#999; float:right; margin:6px 10px 0 0; min-width:18px; font-weight:bold; padding:3px;}
	body>iframe:first-child+div+div+table+div>a:hover{background:#ffb;}</style>