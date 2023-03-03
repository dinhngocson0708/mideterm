<?php 
function is_name($name) {
    $parttern = "/^[A-Za-z0-9_\.]{3,32}$/";
    if (preg_match($parttern, $name))
        return true;
}
function is_password($password) {
    $parttern = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    if (preg_match($parttern, $password))
        return true;
}
function is_email($email) {
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
        return true;
    }
}
//Hiện thị lỗi:
function form_error($vl) {
    global $error;
    if (isset($error[$vl])) {
        echo "<span style=\"color: red;\">{$error[$vl]}</span><br/>";
    }
}

?>