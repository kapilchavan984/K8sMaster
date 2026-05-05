<?php
if($_POST){
    if($_POST['user']=="admin" && $_POST['pass']=="123"){
        echo "Login Success";
    } else {
        echo "Invalid";
    }
}
?>

<form method="POST">
<input name="user" placeholder="Username">
<input name="pass" type="password" placeholder="Password">
<button>Login</button>
</form>