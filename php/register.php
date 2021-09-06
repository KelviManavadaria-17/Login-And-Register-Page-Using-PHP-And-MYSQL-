<!-- 
<form action="register.php" id ="register" class="form-input" method="POST">
                    <input type="text" class="input-feild" placeholder="UserID" name="username" required>
                    <input type="email" class="input-feild" placeholder="EmailID" name="email" required>
                    <input type="password" class="input-feild" placeholder="Password" name="password" required>
                    <br>
                    <br>
                    <br>
                    <button type="submit" class="submit-btn" name="register">Register</button>
                </form>
 -->

<?php

// connect with configure file

require_once("configure.php");
if(isset($_POST['register']))
{
    if(!empty($_POST['username'])   &&   !empty($_POST['email'])   && !empty($_POST['password']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password =$_POST['password'];
        global $ConnectingDB;
        $sql ="INSERT INTO info(Username,Email,Password)
                VALUES(:usernamE,:emaiL,:passworD)";
        $stmt=$ConnectingDB->prepare($sql);
        $stmt->bindValue(':usernamE',$username);
        $stmt->bindValue(':emaiL',$email);
        $stmt->bindValue(':passworD',$password);
        $EXECUTE = $stmt->execute();
        

    }
}


?>
