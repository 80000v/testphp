<?php
/*
 * Created on 2013-12-18
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 include("conn.php");
 if($_POST['sbumit']){
	 $sql = "insert into message (id,user,title,content,lastdate) " .
			"values ('','$_POST[user]','$_POST[title]','$_POST[content]',now())";
	 mysql_query($sql);
     echo "�����ɹ���";
 }
?>

  <form action="add.php" method="post">
	�û�:<input type="text" name="user" size="40" maxlength="40"/><br/>
	����:<input type="text" name="title" size="40" maxlength="40"/><br/>
	����: <input type="text" name="content"/><br/>


  <input type="submit" name="sbumit" value="��������"/>




  </form>

