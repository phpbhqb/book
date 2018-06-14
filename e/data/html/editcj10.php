<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><tr><td bgcolor=ffffff>标题</td><td bgcolor=ffffff>
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
<tr> 
  <td height="25" bgcolor="#FFFFFF">
	<?=$tts?"<select name='ttid'><option value='0'>标题分类</option>$tts</select>":""?>
	<input type=text name=title value="<?=ehtmlspecialchars(stripSlashes($r[title]))?>" size="60"> 
	<input type="button" name="button" value="图文" onclick="document.add.title.value=document.add.title.value+'(图文)';"> 
  </td>
</tr>
<tr> 
  <td height="25" bgcolor="#FFFFFF">属性: 
	<input name="titlefont[b]" type="checkbox" value="b"<?=$titlefontb?>>粗体
	<input name="titlefont[i]" type="checkbox" value="i"<?=$titlefonti?>>斜体
	<input name="titlefont[s]" type="checkbox" value="s"<?=$titlefonts?>>删除线
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;颜色: <input name="titlecolor" type="text" value="<?=stripSlashes($r[titlecolor])?>" size="10" class="color">
  </td>
</tr>
</table>
</td></tr><tr><td bgcolor=ffffff>标题图片</td><td bgcolor=ffffff>
<input name="titlepic" type="text" id="titlepic" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[titlepic]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=titlepic<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a> 
</td></tr><tr><td bgcolor=ffffff>发布时间</td><td bgcolor=ffffff>
<input name="newstime" type="text" value="<?=$r[newstime]?>" size="28" class="Wdate" onClick="WdatePicker({skin:'default',dateFmt:'yyyy-MM-dd HH:mm:ss'})"><input type=button name=button value="设为当前时间" onclick="document.add.newstime.value='<?=$todaytime?>'">
</td></tr><tr><td bgcolor=ffffff>所属小说</td><td bgcolor=ffffff>
<input name="bookid" type="text" id="bookid" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[bookid]))?>" size="45">
<input type="button" name="changebutton" value="选择" onclick="window.open('db/ChangeField.php?viewf=title&changef=id&tbname=book&form=add&field=bookid<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');">
</td></tr><tr><td bgcolor=ffffff>顺序</td><td bgcolor=ffffff>
<input name="sequence" type="text" id="sequence" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[sequence]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>内容详情</td><td bgcolor=ffffff>
<?=ECMS_ShowEditorVar("detail",$ecmsfirstpost==1?"":stripSlashes($r[detail]),"Basic","","300","100%")?>
</td></tr><tr><td bgcolor=ffffff>所属卷</td><td bgcolor=ffffff>
<input name="front_level" type="text" id="front_level" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[front_level]))?>" size="">
</td></tr>