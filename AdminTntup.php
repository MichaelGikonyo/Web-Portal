<?php 

     $connect = mysqli_connect("localhost", "root", "", "project_platform");
	 $sql = "SELECT * FROM details ORDER BY id DESC";
	 $result = mysqli_query($connect, $sql);
     $AdminOutput = null;
     
	 if (mysqli_num_rows($result) > 0){
		 //output each INFO data in a class
		 while ($wor = mysqli_fetch_array($result)){
             
              /// time difference since last upload
             $from_date = strtotime($wor['UploadTime']);
             $to_date = time();
             $diff = floor(($to_date - $from_date)/(60*60*24));
             
             if ($diff < 26 )
             {
              $AdminOutput .= '
                
                <div class="col-md-4">
                <div class="card">
                <a href = "Update.php? id='.$wor['id'].'"  name="'.$wor['id'].'">
                
                <div class="card-header card-header-primary">
                <h3 class="card-title ">'.$wor['location'].'</h3>
                </div>
                
                <div class="card-body">
                <p> Client Name: '.$wor['clientName'].' <br>The Project Began On: '.$wor['dater'].' <br>The Project Ended On: '.$wor['dated'].'</p>
                </a>
                </div>
                </div>
                </div>
            
             ' ;
             }
         }
     }

// when a single item is selected 
if(!empty($_GET['id'])){
    $inf = null;
    $key = null;
    $qsl = "SELECT * FROM details WHERE id = $_GET[id]";
    $resdis = mysqli_query($connect, $qsl);
    while ($rowts = mysqli_fetch_array($resdis)){
    $inf .='
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
        $key .=''.$rowts['id'].'';
} 


// administrative expenses of that project movement moement

    $adminexp = null;

    $qs = "SELECT * FROM move WHERE reff_id = $_GET[id]";
    $resd = mysqli_query($connect, $qs);
    while ($rots = mysqli_fetch_array($resd)){
    $adminexp .='
       
       <tr id="delete'.$rots['id'].'"> 
         <td> <input class="form-control" value="'.$rots['ExpenItem'].'" disabled></td>
         <td> <input class="form-control" value="'.$rots['ExpenDetail'].'" disabled/></td>
         <td> <input class="form-control" value="'.$rots['ExpenQuantity'].'" disabled/></td>
         <td> <input class="form-control" value="'.$rots['ExpenPrice'].'" disabled/></td>
         <td> <input class="form-control name_list" value="'.$rots['ExpenAmount'].'" disabled/></td>
         <td><button onclick="deleteAjax('.$rots['id'].')" class="btn btn-danger"> X </button></td>
      </tr>
      
    ';
} 
    
    // administrative expenses of that project DrillFuel

    $drillFuel = null;

    $qsd = "SELECT * FROM drillfuel WHERE reff_id = $_GET[id]";
    $resdd = mysqli_query($connect, $qsd);
    while ($rotd = mysqli_fetch_array($resdd)){
    $drillFuel .='
       
       <tr id="delete'.$rotd['id'].'">  
         <td> <input class="form-control" value="'.$rotd['ExpenItem'].'" disabled></td>
         <td> <input class="form-control" value="'.$rotd['ExpenDetail'].'" disabled/></td>
         <td> <input class="form-control" value="'.$rotd['ExpenQuantity'].'" disabled/></td>
         <td> <input class="form-control" value="'.$rotd['ExpenPrice'].'" disabled/></td>
         <td> <input class="form-control name_list" value="'.$rotd['ExpenAmount'].'" disabled/></td>
         <td><button onclick="deleteFuel('.$rotd['id'].')" class="btn btn-danger"> X </button></td>
      </tr>
      
    ';
} 
    
    // administrative expenses of that Drill Foam

    $drillFoam = null;

    $qsf = "SELECT * FROM drillfoam WHERE reff_id = $_GET[id]";
    $resf = mysqli_query($connect, $qsf);
    while ($rotf = mysqli_fetch_array($resf)){
    $drillFoam .='
       
       <tr id="delete'.$rotf['id'].'">  
         <td> <input class="form-control" value="'.$rotf['ExpenItem'].'" disabled></td>
         <td> <input class="form-control" value="'.$rotf['ExpenDetail'].'" disabled/></td>
         <td> <input class="form-control" value="'.$rotf['ExpenQuantity'].'" disabled/></td>
         <td> <input class="form-control" value="'.$rotf['ExpenPrice'].'" disabled/></td>
         <td> <input class="form-control name_list" value="'.$rotf['ExpenAmount'].'" disabled/></td>
         <td><button onclick="deleteFoam('.$rotf['id'].')" class="btn btn-danger"> X </button></td>
      </tr>
      
    ';
} 
    // administrative expenses of that project Catering

    $catering = null;

    $qsc = "SELECT * FROM catering WHERE reff_id = $_GET[id]";
    $resc = mysqli_query($connect, $qsc);
    while ($rotc = mysqli_fetch_array($resc)){
    $catering .='
       
       <tr id="delete'.$rotc['id'].'">  
         <td> <input class="form-control" value="'.$rotc['ExpenItem'].'" disabled></td>
         <td> <input class="form-control" value="'.$rotc['ExpenDetail'].'" disabled/></td>
         <td> <input class="form-control" value="'.$rotc['ExpenQuantity'].'" disabled/></td>
         <td> <input class="form-control" value="'.$rotc['ExpenPrice'].'" disabled/></td>
         <td> <input class="form-control name_list" value="'.$rotc['ExpenAmount'].'" disabled/></td>
         <td><button onclick="deleteCater('.$rotc['id'].')" class="btn btn-danger"> X </button></td>
      </tr>
      
    ';
}
    // administrative expenses of that project AutoSpare

    $AutoSpare = null;

    $qss = "SELECT * FROM autospare WHERE reff_id = $_GET[id]";
    $ress = mysqli_query($connect, $qss);
    while ($rotas = mysqli_fetch_array($ress)){
    $AutoSpare .='
       
       <tr id="delete'.$rotas['id'].'">
         <td> <input class="form-control" value="'.$rotas['ExpenItem'].'" disabled></td>
         <td> <input class="form-control" value="'.$rotas['ExpenDetail'].'" disabled/></td>
         <td> <input class="form-control" value="'.$rotas['ExpenQuantity'].'" disabled/></td>
         <td> <input class="form-control" value="'.$rotas['ExpenPrice'].'" disabled/></td>
         <td> <input class="form-control name_list" value="'.$rotas['ExpenAmount'].'" disabled/></td>
         <td><button onclick="deleteAuto('.$rotas['id'].')" class="btn btn-danger"> X </button></td>
      </tr>
      
    ';
} 
    // administrative expenses of that project Communication

    $Comm = null;

    $qscm = "SELECT * FROM communication WHERE reff_id = $_GET[id]";
    $rescm = mysqli_query($connect, $qscm);
    while ($rotcm = mysqli_fetch_array($rescm)){
    $Comm .='
       
       <tr id="delete'.$rotcm['id'].'">  
         <td> <input class="form-control" value="'.$rotcm['ExpenItem'].'" disabled></td>
         <td> <input class="form-control" value="'.$rotcm['ExpenDetail'].'" disabled/></td>
         <td> <input class="form-control" value="'.$rotcm['ExpenQuantity'].'" disabled/></td>
         <td> <input class="form-control" value="'.$rotcm['ExpenPrice'].'" disabled/></td>
         <td> <input class="form-control name_list" value="'.$rotcm['ExpenAmount'].'" disabled/></td>
         <td><button onclick="deleteCommu('.$rotcm['id'].')" class="btn btn-danger"> X </button></td>
      </tr>
      
    ';
} 
    // administrative expenses of that project Miscellanous

    $Misc = null;

    $qse = "SELECT * FROM miscell WHERE reff_id = $_GET[id]";
    $rese = mysqli_query($connect, $qse);
    while ($rote = mysqli_fetch_array($rese)){
    $Misc .='
       
       <tr id="delete'.$rote['id'].'">  
         <td> <input class="form-control" value="'.$rote['ExpenItem'].'" disabled></td>
         <td> <input class="form-control" value="'.$rote['ExpenDetail'].'" disabled/></td>
         <td> <input class="form-control" value="'.$rote['ExpenQuantity'].'" disabled/></td>
         <td> <input class="form-control" value="'.$rote['ExpenPrice'].'" disabled/></td>
         <td> <input class="form-control name_list" value="'.$rote['ExpenAmount'].'" disabled/></td>
         <td><button onclick="deleteMiscell('.$rote['id'].')" class="btn btn-danger"> X </button></td>
      </tr>
      
    ';
} 

// Display images of that project
    
     $imgs = null;
    
        $query = "SELECT * FROM files WHERE reff_id = $_GET[id]";
        $sd = mysqli_query($connect, $query);
        while ($ros = mysqli_fetch_array($sd)) {
            $imgs .='
            
            <div class="col-md-6 col-lg-4 item zoom-on-hover" id="delete'.$ros['id'].'">
                <a class="lightbox" href="'.($ros['img_pdf']).'">
                    <img class="img-fluid image" src="'.($ros['img_pdf']).'" alt="This is a PDF file, Click here">
                </a>
                <button onclick="deleteFile('.$ros['id'].')" class="btn btn-danger"> X </button>
            </div>
            
            ';
        }
}

?>
