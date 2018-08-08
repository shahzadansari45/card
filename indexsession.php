session_start();
$status="";
if(isset($_POST["username"]))
{
	$un=$_POST["username"];
	$ps=$_POST["password"];
	$query=mysql_query("select * from admin where UserName='$un' AND password='$ps'");
	$res=mysql_fetch_array($query);
	if(mysql_num_rows($query)>0)
	{
		if($res["password"]==$ps)
		{
			$_SESSION["UserID"]=$res["adminID"];
			$_SESSION["Name"]=$res["userName"];
			header("location:home.php");
			}
		else
		{
			$status="Invalid Password";
			
			}
		}
		else
		{
			$status="Invalid UserName";
			}
	}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>