<?php
/// _______________result per page 
     $ResultPerPage = 15;
/// _____________________ result per page end
     $connect = mysqli_connect("localhost", "root", "", "project_platform");
	 $sql = "SELECT * FROM details";
	 $result = mysqli_query($connect, $sql);

//// ---------- no of results pagination
     $NumberOfResults = mysqli_num_rows($result);
/////-------------- no. of rows pagination end
//---------------------------------------------------------------------------------------------------------------------------

///_______Pagination count number of results 
 $NumberOfPages = ceil($NumberOfResults/$ResultPerPage);

///////------- which page no. the user is currently on _____________________
if(!isset($_GET['page']))
{
    $page = 1;
    
} else {
    $page = $_GET['page']; 
}
///////------- which page no. the user is currently on End ________________

//---------------sql limit starting number ---------------
$ThisPageFirstResult = ($page-1)*$ResultPerPage;
//---------------sql limit starting number --------------- end
/////////---------- limit the no of reslts _____________________
  $output = null;
if(!isset($_POST['Search']))
{
  $sqlPgn = "SELECT * FROM details ORDER BY id DESC LIMIT ".$ThisPageFirstResult. ','.$ResultPerPage;
  $resultPgn = mysqli_query($connect, $sqlPgn);

        while ($row = mysqli_fetch_assoc($resultPgn)){
             $output .= '
                
                <div class="col-md-4">
                <div class="card">
                <a href = "detail.php? id='.$row['id'].'"  name="'.$row['id'].'">
                
                <div class="card-header card-header-primary">
                <h3 class="card-title ">'.$row['location'].'</h3>
                </div>
                
                <div class="card-body">
                <p> Client Name: '.$row['clientName'].' <br>The Project Began On: '.$row['dater'].' <br>The Project Ended On: '.$row['dated'].'</p>
                </a>
                </div>
                </div>
                </div>
            
             ' ;
         }
} 
else{
     $sqlPgn = "SELECT * FROM details where location LIKE '".$_POST['Search']."' OR clientName LIKE '".$_POST['Search']."' LIMIT ".$ThisPageFirstResult. ','.$ResultPerPage;
     $resultPgn = mysqli_query($connect, $sqlPgn);

        while ($row = mysqli_fetch_assoc($resultPgn)){
             $output .= '
                
                <div class="col-md-4">
                <div class="card">
                <a href = "detail.php? id='.$row['id'].'"  name="'.$row['id'].'">
                
                <div class="card-header card-header-primary">
                <h3 class="card-title ">'.$row['location'].'</h3>
                </div>
                
                <div class="card-body">
                <p> Client Name: '.$row['clientName'].' <br>The Project Began On: '.$row['dater'].' <br>The Project Ended On: '.$row['dated'].'</p>
                </a>
                </div>
                </div>
                </div>
            
             ' ;
         }
}

/////////---------- limit the no of reslts end_____________________

    $pagin = null;
        for ($page=1;$page<=$NumberOfPages;$page++)
        {
            $pagin .='
                <a href="menu.php?page='.$page.' " style="float: center;">'.$page.' </a>
            ';
               
        }
          //________ Pagination count number of results end


//----------------------------------------------------------------------------------------------------------------------------

     

// when a single item is selected 
if(!empty($_GET['id'])){
    $info = null;
    $qsl = "SELECT * FROM details WHERE id = $_GET[id]";
    $resdis = mysqli_query($connect, $qsl);
    while ($rowts = mysqli_fetch_array($resdis)){
    $info .='
       
                    <div class="row">
                            <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Fill In The Location</label>
                                        <input type="text" name="location" class="form-control" value="'.$rowts['location'].'">
                                    </div>
                            </div>
                            <div class="col-md-5">
                                   <div class="form-group">
                                        <label class="bmd-label-floating">Fill In The Client Name</label>
                                        <input type="text" name="clientname" class="form-control" Value="'.$rowts['clientName'].'">
                                    </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-md-5">
                                    <div class="form-group">
                                            <label class="bmd-label-floating">Fill In The Start Date</label>
                                            <input type="date" name="dater" class="form-control" Value="'.$rowts['dater'].'">
                                    </div>
                            </div>
                            <div class="col-md-5">
                                    <div class="form-group">
                                            <label class="bmd-label-floating">Fill In The End Date</label>
                                            <input type="date" name="dated" class="form-control" Value="'.$rowts['dated'].'">
                                    </div>
                            </div>
                    </div>
       
    ';
} 


// administrative expenses of that project

    $adminexp = null;

    $qs = "SELECT * FROM move WHERE reff_id = $_GET[id]";
    $resd = mysqli_query($connect, $qs);
    while ($rots = mysqli_fetch_array($resd)){
    $adminexp .='
       
       <tr>  
         <td> <input class="form-control" value="'.$rots['ExpenItem'].'" ></td>
         <td> <input class="form-control" value="'.$rots['ExpenDetail'].'" disabled /></td>
         <td> <input class="form-control" value="'.$rots['ExpenQuantity'].'" disabled /></td>
         <td> <input class="form-control" value="'.$rots['ExpenPrice'].'" disabled /></td>
         <td> <input class="form-control name_list" value="'.$rots['ExpenAmount'].'" disabled /></td>										  
      </tr>
      
    ';
} 
    // administrative expenses of that project movement

    $drillFuel = null;

    $qsd = "SELECT * FROM drillfuel WHERE reff_id = $_GET[id]";
    $resdd = mysqli_query($connect, $qsd);
    while ($rotd = mysqli_fetch_array($resdd)){
    $drillFuel .='
       
       <tr>  
         <td> <input class="form-control" value="'.$rotd['ExpenItem'].'" ></td>
         <td> <input class="form-control" value="'.$rotd['ExpenDetail'].'" disabled /></td>
         <td> <input class="form-control" value="'.$rotd['ExpenQuantity'].'" disabled /></td>
         <td> <input class="form-control" value="'.$rotd['ExpenPrice'].'" disabled /></td>
         <td> <input class="form-control name_list" value="'.$rotd['ExpenAmount'].'" disabled /></td>
      </tr>
      
    ';
} 
    
    // administrative expenses of that project

    $drillFoam = null;

    $qsf = "SELECT * FROM drillfoam WHERE reff_id = $_GET[id]";
    $resf = mysqli_query($connect, $qsf);
    while ($rotf = mysqli_fetch_array($resf)){
    $drillFoam .='
       
       <tr>  
         <td> <input class="form-control" value="'.$rotf['ExpenItem'].'" ></td>
         <td> <input class="form-control" value="'.$rotf['ExpenDetail'].'" disabled /></td>
         <td> <input class="form-control" value="'.$rotf['ExpenQuantity'].'" disabled /></td>
         <td> <input class="form-control" value="'.$rotf['ExpenPrice'].'" disabled /></td>
         <td> <input class="form-control name_list" value="'.$rotf['ExpenAmount'].'" disabled /></td>
      </tr>
      
    ';
} 
    // administrative expenses of that project

    $catering = null;

    $qsc = "SELECT * FROM catering WHERE reff_id = $_GET[id]";
    $resc = mysqli_query($connect, $qsc);
    while ($rotc = mysqli_fetch_array($resc)){
    $catering .='
       
       <tr>  
         <td> <input class="form-control" value="'.$rotc['ExpenItem'].'" ></td>
         <td> <input class="form-control" value="'.$rotc['ExpenDetail'].'" disabled /></td>
         <td> <input class="form-control" value="'.$rotc['ExpenQuantity'].'" disabled /></td>
         <td> <input class="form-control" value="'.$rotc['ExpenPrice'].'" disabled /></td>
         <td> <input class="form-control name_list" value="'.$rotc['ExpenAmount'].'" disabled /></td>
      </tr>
      
    ';
}
    // administrative expenses of that project

    $AutoSpare = null;

    $qss = "SELECT * FROM autospare WHERE reff_id = $_GET[id]";
    $ress = mysqli_query($connect, $qss);
    while ($rotas = mysqli_fetch_array($ress)){
    $AutoSpare .='
       
       <tr>  
         <td> <input class="form-control" value="'.$rotas['ExpenItem'].'" ></td>
         <td> <input class="form-control" value="'.$rotas['ExpenDetail'].'" disabled /></td>
         <td> <input class="form-control" value="'.$rotas['ExpenQuantity'].'" disabled /></td>
         <td> <input class="form-control" value="'.$rotas['ExpenPrice'].'" disabled /></td>
         <td> <input class="form-control name_list" value="'.$rotas['ExpenAmount'].'" disabled /></td>
      </tr>
      
    ';
} 
    // administrative expenses of that project

    $Comm = null;

    $qscm = "SELECT * FROM communication WHERE reff_id = $_GET[id]";
    $rescm = mysqli_query($connect, $qscm);
    while ($rotcm = mysqli_fetch_array($rescm)){
    $Comm .='
       
       <tr>  
         <td> <input class="form-control" value="'.$rotcm['ExpenItem'].'" ></td>
         <td> <input class="form-control" value="'.$rotcm['ExpenDetail'].'" disabled /></td>
         <td> <input class="form-control" value="'.$rotcm['ExpenQuantity'].'" disabled /></td>
         <td> <input class="form-control" value="'.$rotcm['ExpenPrice'].'" disabled /></td>
         <td> <input class="form-control name_list" value="'.$rotcm['ExpenAmount'].'" disabled /></td>
      </tr>
      
    ';
} 
    // administrative expenses of that project

    $Misc = null;

    $qse = "SELECT * FROM miscell WHERE reff_id = $_GET[id]";
    $rese = mysqli_query($connect, $qse);
    while ($rote = mysqli_fetch_array($rese)){
    $Misc .='
       
       <tr>  
         <td> <input class="form-control" value="'.$rote['ExpenItem'].'" ></td>
         <td> <input class="form-control" value="'.$rote['ExpenDetail'].'" disabled /></td>
         <td> <input class="form-control" value="'.$rote['ExpenQuantity'].'" disabled /></td>
         <td> <input class="form-control" value="'.$rote['ExpenPrice'].'" disabled /></td>
         <td> <input class="form-control name_list" value="'.$rote['ExpenAmount'].'" disabled /></td>
      </tr>
      
    ';
} 


// Display images of that project
    
     $imgs = null;
    
        $query = "SELECT * FROM files WHERE reff_id = $_GET[id]";
        $sd = mysqli_query($connect, $query);
        while ($ros = mysqli_fetch_array($sd)) {
            $imgs .='
            
            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="'.($ros['img_pdf']).'">
                    <img class="img-fluid image" src="'.($ros['img_pdf']).'" alt="This is a PDF file, Click here">
                </a>
            </div>
            
            ';
        }
}

//////////////////// search button when clicked //////////////////////////
 

 
//////////////////// search button when clicked End //////////////////////////

?>
