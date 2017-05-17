<?php 
include('config.php');
$login_error=0;
$username=$_POST['username'];
$password=$_POST['password'];
$pass=md5($password);
$query=("SELECT * FROM customers WHERE CustEmail='$username' AND CustPassword='$pass'" );
$res = mysql_query($query);
if(mysql_num_rows($res) > 0)
		{
			if (mysql_result($res,0,"CustStatus")=='activated'){
				
			$_SESSION['WINSOR_LOGGED_IN'] = mysql_result($res,0,"CustID");
			$_SESSION['WINSOR_LOGGED_EMAIL'] = mysql_result($res,0,"CustEmail");
			$_SESSION['WINSOR_LOGGED_NAME'] = mysql_result($res,0,"CustSurname");
			$_SESSION['WINSOR_LOGGED_OTHERNAME'] = mysql_result($res,0,"CustOtherNames");
			$_SESSION['WINSOR_LOGGED_ACCOUNT'] = mysql_result($res,0,"CustSurname");
			$_SESSION['WINSOR_LOGGED_IN_USERNAME'] = $_POST['username'];
			
			
			
			$cust_id=$_SESSION['WINSOR_LOGGED_IN'];
			$query="UPDATE shoppingcart SET CustID = ".$cust_id." WHERE CustID = 0 " ;
	  		mysql_query($query) or die(mysql_error());
			
			
			if($_GET['action']==1){
				header("location: check_out.php");
			} else
			header("location: my_account.php");
			exit;
			
			}else {  $login_error=2; include("index.php"); exit;}
			
			
		}else {
				$login_error=1;
				if($_GET['action']==1){
				include("check_out.php");
				} else
				include("index.php");
			}
			
	
			
	exit;
?>