<?php
/*
 * Created on 2013-12-18
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
$conn = @ mysql_connect("localhost", "root", "") or die("���ݿ����Ӵ���");
mysql_select_db("bbs", $conn);
mysql_query("set names 'GBK'"); //ʹ��GBK���ı���;
?>
