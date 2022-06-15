<?php 
session_start();
 $connect = mysqli_connect("localhost", "root", "", "project_platform");  
 /////////////////////////////////
 $key = "SELECT MAX(orid) AS maximum FROM filekey";
 $result = mysqli_query($connect, $key);
    $row = mysqli_fetch_assoc($result);
    $maximum = $row['maximum'];
    $add = 0;
    $add = $maximum + 1;

if ($add > 1)
{
    
    /////////////////////////
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
       if (!empty($_POST["location"]))
          {
             // info.php
    
             $location = $_POST["location"];
             $client = $_POST["clientname"];
             $Sdate = $_POST["dater"];
             $Edate = $_POST["dated"];

	         $sqlt = "INSERT INTO details(location, clientName, dater, dated) VALUES ('$location', '$client', '$Sdate', '$Edate') limit 1";
		     // get the last id (primary Key)& assign as foreign key to the other tables
		     if (mysqli_query($connect, $sqlt))
                {
                   $last_id = mysqli_insert_id($connect);
                   $_SESSION['lasti'] = $last_id;
                }
           
          ///////////////////////////////  expen category   //////////////////////////////////////////////////
                   $number=''; 
                   $number = count($_POST["mname"]);
                   if($number > 0)  
                      {  
                         for($i=0; $i < $number; $i++)  
                           {  
                              if(trim($_POST["mname"][$i] != ''))  
                                {  
                                   $sql = " INSERT INTO move(ExpenItem, ExpenDetail, ExpenQuantity, ExpenPrice, ExpenAmount, reff_id) VALUES('".mysqli_real_escape_string($connect, $_POST["mname"][$i])."', '".mysqli_real_escape_string($connect, $_POST["mdetail"][$i])."', '".mysqli_real_escape_string($connect, $_POST["mquantity"][$i])."', '".mysqli_real_escape_string($connect, $_POST["mprice"][$i])."', '".mysqli_real_escape_string($connect, $_POST["mamount"][$i])."', '$last_id') ";  
                                   mysqli_query($connect, $sql);  
                                }  
                           }   
                      }
           ///////////////////////////////  expen category   //////////////////////////////////////////////////
                   $numberd=''; 
                   $numberd = count($_POST["dname"]);
                   if($numberd > 0)  
                      {  
                         for($d=0; $d < $numberd; $d++)  
                           {  
                              if(trim($_POST["dname"][$d] != ''))  
                                {  
                                   $sql = " INSERT INTO drillfuel(ExpenItem, ExpenDetail, ExpenQuantity, ExpenPrice, ExpenAmount, reff_id) VALUES('".mysqli_real_escape_string($connect, $_POST["dname"][$d])."', '".mysqli_real_escape_string($connect, $_POST["ddetail"][$d])."', '".mysqli_real_escape_string($connect, $_POST["dquantity"][$d])."', '".mysqli_real_escape_string($connect, $_POST["dprice"][$d])."', '".mysqli_real_escape_string($connect, $_POST["damount"][$d])."', '$last_id') ";  
                                   mysqli_query($connect, $sql);  
                                }  
                           }   
                      }
           ///////////////////////////////  expen category   //////////////////////////////////////////////////
                   $numberf=''; 
                   $numberf = count($_POST["fname"]);
                   if($numberf > 0)  
                      {  
                         for($f=0; $f < $numberf; $f++)  
                           {  
                              if(trim($_POST["fname"][$f] != ''))  
                                {  
                                   $sql = " INSERT INTO drillfoam(ExpenItem, ExpenDetail, ExpenQuantity, ExpenPrice, ExpenAmount, reff_id) VALUES('".mysqli_real_escape_string($connect, $_POST["fname"][$f])."', '".mysqli_real_escape_string($connect, $_POST["fdetail"][$f])."', '".mysqli_real_escape_string($connect, $_POST["fquantity"][$f])."', '".mysqli_real_escape_string($connect, $_POST["fprice"][$f])."', '".mysqli_real_escape_string($connect, $_POST["famount"][$f])."', '$last_id') ";  
                                   mysqli_query($connect, $sql);  
                                }  
                           }   
                      }
           ///////////////////////////////  expen category   //////////////////////////////////////////////////
                   $numberc=''; 
                   $numberc = count($_POST["cname"]);
                   if($numberc > 0)  
                      {  
                         for($c=0; $c < $numberc; $c++)  
                           {  
                              if(trim($_POST["cname"][$c] != ''))  
                                {  
                                   $sql = " INSERT INTO catering(ExpenItem, ExpenDetail, ExpenQuantity, ExpenPrice, ExpenAmount, reff_id) VALUES('".mysqli_real_escape_string($connect, $_POST["cname"][$c])."', '".mysqli_real_escape_string($connect, $_POST["cdetail"][$c])."', '".mysqli_real_escape_string($connect, $_POST["cquantity"][$c])."', '".mysqli_real_escape_string($connect, $_POST["cprice"][$c])."', '".mysqli_real_escape_string($connect, $_POST["camount"][$c])."', '$last_id') ";  
                                   mysqli_query($connect, $sql);  
                                }  
                           }   
                      }
           ///////////////////////////////  expen category   //////////////////////////////////////////////////
                   $numbera=''; 
                   $numbera = count($_POST["aname"]);
                   if($numbera > 0)  
                      {  
                         for($a=0; $a < $numbera; $a++)  
                           {  
                              if(trim($_POST["aname"][$a] != ''))  
                                {  
                                   $sql = " INSERT INTO autospare(ExpenItem, ExpenDetail, ExpenQuantity, ExpenPrice, ExpenAmount, reff_id) VALUES('".mysqli_real_escape_string($connect, $_POST["aname"][$a])."', '".mysqli_real_escape_string($connect, $_POST["adetail"][$a])."', '".mysqli_real_escape_string($connect, $_POST["aquantity"][$a])."', '".mysqli_real_escape_string($connect, $_POST["aprice"][$a])."', '".mysqli_real_escape_string($connect, $_POST["aamount"][$a])."', '$last_id') ";  
                                   mysqli_query($connect, $sql);  
                                }  
                           }   
                      }
           ///////////////////////////////  expen category   //////////////////////////////////////////////////
                   $numbern=''; 
                   $numbern = count($_POST["nname"]);
                   if($numbern > 0)  
                      {  
                         for($n=0; $n < $numbern; $n++)  
                           {  
                              if(trim($_POST["nname"][$n] != ''))  
                                {  
                                   $sql = " INSERT INTO communication(ExpenItem, ExpenDetail, ExpenQuantity, ExpenPrice, ExpenAmount, reff_id) VALUES('".mysqli_real_escape_string($connect, $_POST["nname"][$n])."', '".mysqli_real_escape_string($connect, $_POST["ndetail"][$n])."', '".mysqli_real_escape_string($connect, $_POST["nquantity"][$n])."', '".mysqli_real_escape_string($connect, $_POST["nprice"][$n])."', '".mysqli_real_escape_string($connect, $_POST["namount"][$n])."', '$last_id') ";  
                                   mysqli_query($connect, $sql);  
                                }  
                           }   
                      }
           ///////////////////////////////  expen category   //////////////////////////////////////////////////
                   $numbers=''; 
                   $numbers = count($_POST["sname"]);
                   if($numbers > 0)  
                      {  
                         for($s=0; $s < $numbers; $s++)  
                           {  
                              if(trim($_POST["sname"][$s] != ''))  
                                {  
                                   $sql = " INSERT INTO miscell(ExpenItem, ExpenDetail, ExpenQuantity, ExpenPrice, ExpenAmount, reff_id) VALUES('".mysqli_real_escape_string($connect, $_POST["sname"][$s])."', '".mysqli_real_escape_string($connect, $_POST["sdetail"][$s])."', '".mysqli_real_escape_string($connect, $_POST["squantity"][$s])."', '".mysqli_real_escape_string($connect, $_POST["sprice"][$s])."', '".mysqli_real_escape_string($connect, $_POST["samount"][$s])."', '$last_id') ";  
                                   mysqli_query($connect, $sql);  
                                }  
                           }   
                      }
           ///////////////////////////////  expen category   //////////////////////////////////////////////////
           
          }
           else { echo "The Form is Empty"; }
    }
    
 if(!empty($_FILES))
      {
            
            $lastd = $_SESSION['lasti'];
            if ($lastd > 1)
            {
                   ////////////////////////////////////
                     $uploadDir = "FILES/";
                     $tmpfile = $_FILES['drop']['tmp_name'];
                     $filename = $uploadDir. $lastd. '-'. $_FILES['drop']['name'];
                     if (move_uploaded_file($tmpfile,$filename))
                     {
                
                     // UPLOAD to DB
                     $inser = "INSERT INTO files(img_pdf, reff_id) VALUES ('$filename', '$lastd')";
		             mysqli_query($connect, $inser);
                        
                      }
                   ///////////////////////////////////
            }
        
      }
      else 
      {
         echo "All Files Have been Upload";
         //$_SESSION['lasti'] = 0;
      }   
     
}
 ?>