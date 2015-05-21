<?php
session_start();
//Site Setup
require_once("sv_config.php");
require_once("sv_classes/db_class.php");
require_once("sv_functions.php");

//Page Inits
checkLogin();

//Page Files
require_once("sv.header.php");
require_once("sv.page.php");
require_once("sv.footer.php");

//$newuser = new dbobject;

//$colname = array(0=>"USN", 1=>"PWD",2=>"ACTIVE",3=>"ID");
//$pwd = md5("gatway12");
//$insertdata = array(0=>"alex@alexbeemer.com2", 1=>$pwd, 2=>"0", 3=>"");
//$newuser->insertdb("sv_users", $colname, $insertdata);
//$qry = "SELECT * FROM sv_users";
//foreach($newuser->generalqry($qry) as $user){
	//echo $user['USN'];
//}
?>