<?php
    //connection
    $connect = mysqli_connect("localhost", "root", "", "project_platform");
    
    $id = $_POST['delete_id'];
    //select path
     $sd = mysqli_query($connect,"SELECT img_pdf FROM files WHERE id = '$id'");
     while($row = mysqli_fetch_assoc($sd))
     {
         $path = $row['img_pdf'];
         if(unlink($path))
         {
             $query = mysqli_query($connect,"DELETE FROM files WHERE id='$id'");
         }
     }
     
?>