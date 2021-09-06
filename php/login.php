<!-- <form action="/php/login.php"id="login" class="form-input" method="POST">
                     <input type="text" class="input-feild" placeholder="UserID" name="userid" required>
                     
                     <input type="password" class="input-feild" placeholder="Password" name="password" required>
                     <br>
                     <br>
                     <br>
                     <button type="submit" class="submit-btn" name="login">LogIn</button>
</form> -->
<?php
require_once("configure.php");
if(isset($_POST['login']))
{
    if(!empty($_POST['userid']) && !empty($_POST['password']))
    {
        $username = $_POST['username'];
        $password =$_POST['password'];
        global $ConnectingDB;
        $sql = "SELECT * FROM info WHERE Username='".$username."' AND Password='".$password."'  
                limit 1";
        $result = mysql_query($sql);
        if(mysql_num_rows($result)==1)
        {
            <span>
            echo "{$username} have logged in successfully"
            </span>
        }
        else
        {
            <span>
            echo "USERNAME OR PASSWORD INCORRECT"
            </span>
        }

    }
}

?>

