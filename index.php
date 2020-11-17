<!DOCTYPE html>
<html>
<head>
    <title>Login Pengguna</title>
    <link rel="stylesheet" type="text/css" href="assets/css/desain_login.css">
</head>    
<body>
    <br/>
    <br/>
    <div class="login">
    <br/>
        <form action="config/login.php" method="post" onSubmit="return validasi()">
            <center><h2>Login Pengguna</h2></center>
            <div>
                <label>Username : </label>
                <input type="text" name="username" id="username" />
            </div>
            <div>
                <label>Password : </label>
                <input type="password" name="password" id="password" />
            </div>
            <div>
                <input type="submit" value="Login" class="tombol" />
            </div>
        </form>
    </div>
</body>

<script type="text/javascript">
    function validasi() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        if (username != "" && password !="") {
            return true;
        } else {
            alert("Username dan Password Harus Di Isi !")
            return false:
        }
    }
</script>

</html>
