<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$grpagetitle?> - Powered by EmpireCMS</title>
<meta name="Keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />
<link href="/empire/skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/empire/skin/default/js/tabs.js"></script>
</head>
<body class="showpage info">
<!-- 页头 -->
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="top">
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="63%"> 
<!-- 登录 -->
<script>
document.write('<script src="/empire/e/member/login/loginjs.php?t='+Math.random()+'"><'+'/script>');
</script>
</td>
<td align="right">
<a onclick="window.external.addFavorite(location.href,document.title)" href="#ecms">加入收藏</a> | <a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('/empire/')" href="#ecms">设为首页</a> | <a href="/empire/e/member/cp/">会员中心</a> | <a href="/empire/e/DoInfo/">我要投稿</a> | <a href="/empire/e/web/?type=rss2&classid=<?=$ecms_gr[classid]?>" target="_blank">RSS<img src="/empire/skin/default/images/rss.gif" border="0" hspace="2" /></a>
</td>
</tr>
</table>
</td>
</tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="10">
<tr valign="middle">
<td width="240" align="center"><a href="/empire/"><img src="/empire/skin/default/images/logo.gif" width="200" height="65" border="0" /></a></td>
<td align="center"><a href="http://www.phome.net/OpenSource/" target="_blank"><img src="/empire/skin/default/images/opensource.gif" width="100%" height="70" border="0" /></a></td>
</tr>
</table>
<!-- 导航tab选项卡 -->
<table width="920" border="0" align="center" cellpadding="0" cellspacing="0" class="nav">
  <tr> 
    <td class="nav_global"><ul>
        <li class="curr" id="tabnav_btn_0" onmouseover="tabit(this)"><a href="/empire/">首页</a></li>
        <? @sys_ShowClassByTemp('0',12,0,0);?> </ul></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
	<tr valign="top">
		<td class="main"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
				<tr>
					<td>您当前的位置：<?=$grurl?></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
				<tr>
					<td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="title_info">
							<tr>
								<td colspan="2"><h1><?=$ecms_gr[title]?></h1></td>
							</tr>
							<tr>
								<td class="info_text">所在地区：<a href="/empire/e/action/ListInfo.php?classid=<?=$ecms_gr[classid]?>&amp;ph=1&amp;myarea=<?=$ecms_gr[myarea]?>"><?=$ecms_gr[myarea]?></a>&nbsp;&nbsp;</td>
								<td align="right" class="info_text">时间：<?=date('Y年m月d日 H:i:s',$ecms_gr[newstime])?>&nbsp;&nbsp;【<a 
href="/empire/e/member/fava/add/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>">加入收藏夹</a>】【<a href="/empire/e/public/report/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>" target="_blank">举报</a>】【<a href="javascript:window.close()">关闭</a>】</td>
							</tr>
						</table>
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td id="text"><p><a href="<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" title="点击查看原图" target="_blank"><img src="<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" hspace="6" border="0" align="left" /></a><?=nl2br($ecms_gr[smalltext])?></p></td>
							</tr>
						</table>
						<table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF">
							<tr>
								<td bgcolor="#F4F9FD">&nbsp;&nbsp;<strong>联系方式</strong></td>
							</tr>
						</table>
						<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#F4F9FD">
							<tr>
								<td width="13%" bgcolor="#FFFFFF"><div align="right">发 布 者：</div></td>
								
                <td width="88%" bgcolor="#FFFFFF"><?=$ecms_gr[ismember]==1&&$ecms_gr[userid]?'<a href="'.$public_r[newsurl].'e/space/?userid='.$ecms_gr[userid].'" target=_blank>'.$ecms_gr[username].'</a>':$ecms_gr[username]?>&nbsp;(<a href="/empire/e/member/msg/AddMsg/?enews=AddMsg&amp;re=1&amp;username=<?=$ecms_gr[username]?>" target="_blank">发送站内信息</a>)</td>
							</tr>
							<tr>
								<td bgcolor="#FFFFFF"><div align="right">联系邮箱：</div></td>
								<td bgcolor="#FFFFFF"><a href="mailto:<?=$ecms_gr[email]?>"><?=$ecms_gr[email]?></a></td>
							</tr>
							<tr>
								<td bgcolor="#FFFFFF"><div align="right">联系方式：</div></td>
								<td bgcolor="#FFFFFF"><?=$ecms_gr[mycontact]?></td>
							</tr>
							<tr>
								<td bgcolor="#FFFFFF"><div align="right">联系地址：</div></td>
								<td bgcolor="#FFFFFF"><?=$ecms_gr[address]?></td>
							</tr>
						</table>
						<table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#FFFFFF">
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td bgcolor="#F8F8F8">&nbsp;&nbsp;<strong>推荐给朋友</strong></td>
							</tr>
							<tr>
								<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td width="2%">&nbsp;</td>
											<td><script>
function sendtof(url)
{
window.clipboardData.setData('Text',url);
alert('复制地址成功，粘贴给你好友一起分享。');
}
  			</script>
												<input name="textfield" type="text" value="http://域名<?=$grtitleurl?>" size="60" onclick="sendtof(this.value);" /></td>
										</tr>
									</table></td>
							</tr>
						</table>
						
          </td>
				</tr>
			</table>
			<script>
		  function CheckPl(obj)
		  {
		  if(obj.saytext.value=="")
		  {
		  alert("您没什么话要说吗？");
		  obj.saytext.focus();
		  return false;
		  }
		  return true;
		  }
		  </script><form action="/empire/e/pl/doaction.php" method="post" name="saypl" id="saypl" onsubmit="return CheckPl(document.saypl)">
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="plpost">

<tr>
<td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="title">
<tr>
<td><strong>发表评论</strong></td>
<td align="right"><a href="/empire/e/pl/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>">共有<span><script type="text/javascript" src="/empire/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=2"></script></span>条评论</a></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr>
<td><table width="100%" border="0" cellpadding="0" cellspacing="2">
<tr>
<td width="56%" align="left">用户名:
<input name="username" type="text" class="inputText" id="username" value="" size="16" /></td>
<td width="44%" align="left">密码:
<input name="password" type="password" class="inputText" id="password" value="" size="16" /></td>
</tr>
<tr>
<td align="left">验证码:
<input name="key" type="text" class="inputText" size="10" />
<img src="/empire/e/ShowKey/?v=pl" align="absmiddle" name="plKeyImg" id="plKeyImg" onclick="plKeyImg.src='/empire/e/ShowKey/?v=pl&t='+Math.random()" title="看不清楚,点击刷新" /> </td>
<td align="left"><input name="nomember" type="checkbox" id="nomember" value="1" checked="checked" />
匿名发表</td>
</tr>
</table>
<textarea name="saytext" rows="6" id="saytext"></textarea><input name="imageField" type="image" src="/empire/e/data/images/postpl.gif"/>
<input name="id" type="hidden" id="id" value="<?=$ecms_gr[id]?>" />
<input name="classid" type="hidden" id="classid" value="<?=$ecms_gr[classid]?>" />
<input name="enews" type="hidden" id="enews" value="AddPl" />
<input name="repid" type="hidden" id="repid" value="0" />
<input type="hidden" name="ecmsfrom" value="<?=$grtitleurl?>"></td>
</tr>
</table>
</td>
</tr>
</table></form></td>
		<td class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
				<tr>
					<td><strong>地区导航</strong></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
				<tr>
					<td><table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
	<tr>
		<td width="33%"><img src="/empire/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/empire/e/action/ListInfo.php?classid=<?=$ecms_gr[classid]?>&ph=1&myarea=东城区">东城区</a></td>
		<td width="33%"><img src="/empire/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/empire/e/action/ListInfo.php?classid=<?=$ecms_gr[classid]?>&ph=1&myarea=西城区">西城区</a></td>
		<td width="33%"><img src="/empire/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/empire/e/action/ListInfo.php?classid=<?=$ecms_gr[classid]?>&ph=1&myarea=通州区">通州区</a></td>
	</tr>
	<tr>
		<td><img src="/empire/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/empire/e/action/ListInfo.php?classid=<?=$ecms_gr[classid]?>&ph=1&myarea=崇文区">崇文区</a></td>
		<td><img src="/empire/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/empire/e/action/ListInfo.php?classid=<?=$ecms_gr[classid]?>&ph=1&myarea=宣武区">宣武区</a></td>
		<td><img src="/empire/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/empire/e/action/ListInfo.php?classid=<?=$ecms_gr[classid]?>&ph=1&myarea=大兴区">大兴区</a></td>
	</tr>
	<tr>
		<td><img src="/empire/e/data/images/msgnav.gif" width="5" height="5" /><a href="/empire/e/action/ListInfo.php?classid=<?=$ecms_gr[classid]?>&ph=1&myarea=朝阳区">&nbsp;朝阳区</a></td>
		<td><img src="/empire/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/empire/e/action/ListInfo.php?classid=<?=$ecms_gr[classid]?>&ph=1&myarea=海淀区">海淀区</a></td>
		<td><img src="/empire/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/empire/e/action/ListInfo.php?classid=<?=$ecms_gr[classid]?>&ph=1&myarea=昌平区">昌平区</a></td>
	</tr>
	<tr>
		<td><img src="/empire/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/empire/e/action/ListInfo.php?classid=<?=$ecms_gr[classid]?>&ph=1&myarea=丰台区">丰台区</a></td>
		<td><img src="/empire/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/empire/e/action/ListInfo.php?classid=<?=$ecms_gr[classid]?>&ph=1&myarea=石景山区">石景山区</a></td>
		<td><img src="/empire/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/empire/e/action/ListInfo.php?classid=<?=$ecms_gr[classid]?>&ph=1&myarea=其它">其它</a></td>
	</tr>
</table></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
				<tr>
					<td><strong>分类导航</strong></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
				<tr>
					<td><table width="100%" border="0" cellpadding="4" cellspacing="0">
  <tr>
    <td bgcolor="#EEF1F4">&nbsp;<img src="/empire/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/empire/e/action/ListInfo/?classid=10"><strong>房屋信息</strong></a></td>
  </tr> 
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="/empire/e/action/ListInfo/?classid=11">房屋求租</a></td>
    <td width="33%"><a href="/empire/e/action/ListInfo/?classid=12">房屋出租</a></td>
  		<td width="33%"><a href="/empire/e/action/ListInfo/?classid=15">办公用房</a></td>
  </tr>
  <tr>
    <td><a href="/empire/e/action/ListInfo/?classid=13">房屋求购</a></td>
    <td><a href="/empire/e/action/ListInfo/?classid=14">房屋出售</a></td>
  		<td><a href="/empire/e/action/ListInfo/?classid=16">旺铺门面</a></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="4" bgcolor="#EEF1F4">
  <tr>
    <td>&nbsp;<img src="/empire/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/empire/e/action/ListInfo/?classid=17"><strong>跳蚤市场</strong></a></td>
  </tr>
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="/empire/e/action/ListInfo/?classid=18">电脑配件</a></td>
    <td width="33%"><a href="/empire/e/action/ListInfo/?classid=19">电器数码</a></td>
  		<td width="33%"><a href="/empire/e/action/ListInfo/?classid=21">居家用品</a></td>
  </tr>
  <tr>
    <td><a href="/empire/e/action/ListInfo/?classid=20">通讯产品</a></td>
    <td><a href="/empire/e/action/ListInfo/?classid=21"></a></td>
  		<td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#EEF1F4">
  <tr>
    <td>&nbsp;<img src="/empire/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/empire/e/action/ListInfo/?classid=22"><strong>同城生活</strong></a></td>
  </tr>
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="/empire/e/action/ListInfo/?classid=23">本地新闻</a></td>
    <td width="33%"><a href="/empire/e/action/ListInfo/?classid=24">购物打折</a></td>
  		<td width="33%"><a href="/empire/e/action/ListInfo/?classid=26">便民告示</a></td>
  </tr>
  <tr>
    <td><a href="/empire/e/action/ListInfo/?classid=25">旅游活动</a></td>
    <td>&nbsp;</td>
  		<td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#EEF1F4">
  <tr>
    <td>&nbsp;<img src="/empire/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/empire/e/action/ListInfo/?classid=27"><strong>求职招聘</strong></a></td>
  </tr>
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="/empire/e/action/ListInfo/?classid=28">工程技术</a></td>
    <td width="33%"><a href="/empire/e/action/ListInfo/?classid=29">财务会计</a></td>
  		<td width="33%"><a href="/empire/e/action/ListInfo/?classid=31">经营管理</a></td>
  </tr>
  <tr>
    <td><a href="/empire/e/action/ListInfo/?classid=30">餐饮行业</a></td>
    <td><a href="/empire/e/action/ListInfo/?classid=31"></a></td>
  		<td>&nbsp;</td>
  </tr>
</table></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
				<tr>
					<td><strong>推荐信息</strong></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
				<tr>
					<td><ul>
							<script src='/empire/d/js/class/class<?=$ecms_gr[classid]?>_goodnews.js'></script>
						</ul></td>
				</tr>
			</table></td>
	</tr>
</table>
<!-- 页脚 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td align="center" class="search">
<form action="/empire/e/search/index.php" method="post" name="searchform" id="searchform">
<table border="0" cellspacing="6" cellpadding="0">
<tr>
<td><strong>站内搜索：</strong>
<input name="keyboard" type="text" size="32" id="keyboard" class="inputText" />
<input type="hidden" name="show" value="title" />
<input type="hidden" name="tempid" value="1" />
<select name="tbname">
<option value="news">新闻</option>
<option value="download">下载</option>
<option value="photo">图库</option>
<option value="flash">FLASH</option>
<option value="movie">电影</option>
<option value="shop">商品</option>
<option value="article">文章</option>
<option value="info">分类信息</option>
</select>
</td>
<td><input type="image" class="inputSub" src="/empire/skin/default/images/search.gif" />
</td>
<td><a href="/empire/search/" target="_blank">高级搜索</a></td>
</tr>
</table>
</form>
</td>
</tr>
<tr>
<td>
	<table width="100%" border="0" cellpadding="0" cellspacing="4" class="copyright">
        <tr> 
          <td align="center"><a href="/empire/">网站首页</a> | <a href="#">关于我们</a> 
            | <a href="#">服务条款</a> | <a href="#">广告服务</a> | <a href="#">联系我们</a> 
            | <a href="#">网站地图</a> | <a href="#">免责声明</a> | <a href="/empire/e/wap/" target="_blank">WAP</a></td>
        </tr>
        <tr> 
          <td align="center">Powered by <strong><a href="http://www.phome.net" target="_blank">EmpireCMS</a></strong> 
            <strong><font color="#FF9900">7.5</font></strong>&nbsp; &copy; 2002-2018 
            <a href="http://www.digod.com" target="_blank">EmpireSoft Inc.</a></td>
        </tr>
	</table>
</td>
</tr>
</table> <?='<script src="'.$public_r[newsurl].'e/public/onclick/?enews=donews&classid='.$ecms_gr[classid].'&id='.$ecms_gr[id].'"></script>'?>
</body>
</html>