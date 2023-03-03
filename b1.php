<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require 'fucntion.php';
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $error = array(); // Chưa có lỗi
        // Kiểm tra lỗi Firstname
        if (empty($_POST['firstname'])) {
            $error['firstname'] = "Bạn cần nhập Firstname";
        } else {
            // Kiểm tra định dạng username
            if (!is_name($_POST['firstname'])) {
                $error['firstname'] = "Firstname không đúng định dạng";
            } else {
                $Fname = $_POST['firstname'];
            }
        }
        // Kiểm tra lỗi Lastname
         if (empty($_POST['lastname'])) {
            $error['lastname'] = "Bạn cần nhập Lastname";
        } else {
            // Kiểm tra định dạng username
            if (!is_name($_POST['lastname'])) {
                $error['lastname'] = "Lastname không đúng định dạng";
            } else {
                $Lname = $_POST['lastname'];
            }
        }
        //Kiểm tra lỗi password
        if (empty($_POST['PW'])) {
            $error['password'] = "Bạn cần nhập vào password";
        }else {
            // Kiểm tra định dạng password
            if (!is_password($_POST['PW'])) {
                $error['password'] = "Password không đúng định dạng";
            } else {
                $password = $_POST['PW'];
            }
        }

         //Kiểm tra lỗi email
         if (empty($_POST['email'])) {
            $error['email'] = "Bạn cần nhập vào password";
        } else {
            // Kiểm tra định dạng password
            if (!is_password($_POST['email'])) {
                $error['email'] = "Email không đúng định dạng";
            } else {
                $Email = $_POST['email'];
            }
        }
    }
    ?>


    <form action="" method="POST">
    <table>
        <tr>
            <td><span><?php form_error('email');?></span><input type="text" name="email" placeholder="Your email"></td>
        </tr>
        <tr>
            <td><span><?php form_error('lastname');?></span><input type="text" name="lastname" placeholder="LastName"></td>
            <td><span><?php form_error('firstname');?></span><input type="text" name="firstname" placeholder="FirstName"></td>
        </tr>
        <tr>
            <td><span><?php form_error('password');?></span><input type="password" name="PW" placeholder="Password"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Sign up"></td>
        </tr>

        
    </table>
    </form>
    <?php
     if (empty($error)) {
        echo $firstname." ".$lastname;
        echo $email;
        echo $password;
    }
    ?>
    
</body>
</html>