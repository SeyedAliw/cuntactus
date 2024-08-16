<?php
require_once "../../../functions/pdo.php";
// require_once "../../../functions/hellpers.php";
$phone=$_POST['phone'];
$message="عملیات با موفقیت انجام شد";
if (isset($_POST["submit"])) {
    if(isset($_POST["fullname"]) && ($_POST["phone"]) && ($_POST["email"]) && ($_POST["text"])) {
        if(strlen($phone)==11) {
            $query="INSERT INTO `contactus`(`fullname`, `phone`, `email`, `text`) VALUES (?,?,?,?)";
$stm=$conn->prepare($query);
$stm->execute([$_POST['fullname'],$_POST['phone'],$_POST['email'],$_POST['text']]);{
    echo "<SCRIPT> //not showing me this
    alert('$message')
    window.location.replace('http://localhost/radolf/view/user/index/index.php');
</SCRIPT>";

     }

        } else{
            echo "n";
        }
    }else{
        echo "a";
    }
}
else {
echo"پر کردن تمامی فیلد ها اجباری است";
}



