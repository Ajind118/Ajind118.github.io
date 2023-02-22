<?php
 if(isset($_POST['Submit']))
 {
   $id=$_REQUEST['id'];
   $pass=$_REQUEST['pass'];
    if($id=="Ajind118" && $pass=="Ganpatidadamoriya")
	 {
	  header("location:main.php");
	  }
	 else
	 {
	  header("location:mp3.php");
	 }
}
?>


<html>
<head>
<title>Login</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <div align="center">Enter
LoginId-
    <label>
    <input name="id" type="text" id="id" />
    </label>
    <p>Enter Password-
      <label>
      <input name="pass" type="text" id="pass" />
      </label>
</p>
    <p>
      <label>
      <input type="submit" name="Submit" value="Login" />
      </label>
    </p>
  </div>
</form>
</body>
</html>
