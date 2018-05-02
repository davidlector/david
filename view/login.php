<!DOCTYPE html>
<html>
<head>
  <title>Universitas</title>
  <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>
  <br/>
  <br/>
  <center><h2>UNIVERSITAS BUATAN SENDIRI</h2></center>  
  <br/>
  <div class="login">
  <br/>
    <form action="../process/login_mahasiswa_process.php" method="post" onSubmit="return validasi()">
      <div>
        <label>Username:</label>
        <input type="text" name="username" id="username" />
      </div>
      <div>
        <label>Password:</label>
        <input type="password" name="password" id="password" />
      </div>      
      <div>
        <input type="submit" value="Login" href="<?php echo $base_url."login_mahasiswa_process.php?p=mahasiswa_update&nim=$row[NIM]"?> " class="tombol">
      </div>
    </form>
  </div>
</body>
 






 
<script type="text/javascript">
  function validasi() {
    var username = document.getElementById("username_login").value;
    var password = document.getElementById("password_login").value;   
    if (username != "admin" && password!="admin") {
      return true;
    }else{
      alert('Username dan Password harus di isi !');
      return false;
    }
  }
 
</script>
</html>