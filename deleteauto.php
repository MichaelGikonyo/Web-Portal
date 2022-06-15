<?php
    //connection
    $connect = mysqli_connect("localhost", "root", "", "project_platform");
    
    $id = $_POST['delete_id'];
    $query = mysqli_query($connect,"DELETE FROM autospare WHERE id='$id'");
?>