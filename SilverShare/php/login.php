
<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "elderly";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    $email = $_POST['email'];  
    $pass = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $pass = stripcslashes($pass);  
        $email = mysqli_real_escape_string($con, $email);  
        $pass = mysqli_real_escape_string($con, $pass);  
      
        $sql = "select * from registeration where email = '$email' and Password = '$pass'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header('Location: ../elddashboard.php
            ');  
        }  
        else{  
            header('Location: ../login.php
            ');  
        }     
?>  