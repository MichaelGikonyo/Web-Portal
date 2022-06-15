<?php
session_start();
$connect = mysqli_connect('localhost','root','','project_platform') or die('Unable To connect');

$npass = $_POST["npass"];
$cpass = $_POST["cpass"];
$email = $_POST["email"];
$name = $_POST["name"];
$ppass = $_POST["ppass"];
$oldpass = md5($ppass);

$result = mysqli_query($connect, "SELECT * FROM login_user WHERE password='$oldpass' and id = '".$_SESSION["id"]."' ");
$rowzy = mysqli_fetch_array($result);
if(is_array($rowzy))
{
    ////
    if ($npass == $cpass)
    {
        $hash = md5($npass);
        $id = $rowzy["id"];
        $update = ("UPDATE login_user SET name='$name', user_name='$email', password='$hash' WHERE id='$id' ");
        if(mysqli_query($connect, $update))
        {
            echo "The profile updated successfully";
        }
        else
        {
            echo "Error Updating";
        }
    }
    if ($npass != $cpass)
    {
        echo "The New Password & Cornfirmed Password don't Match";
    }
}
else
{
    echo "The Current Password is incorrect";
}

?>