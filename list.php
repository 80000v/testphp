<?php
/*
 * Created on 2013-12-18
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
include("conn.php");
?>

<table width=500 border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#add3ef">
<?
$sql = "select * from message order by id desc";
$query = mysql_query($sql);
while($row = mysql_fetch_array($query)){
?>
  <tr bgcolor="#eff3ff">
  <td>标题：<?=$row[title]?> 用户：<?=$row[user]?></td>
  </tr>
  <tr bgColor="#ffffff">
  <td>内容：<?=$row[content]?></td>
  </tr>
<?
}
?>
</table>
