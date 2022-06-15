<?php
    session_start();
    include "tntup.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aquifer Abstractors</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <!--  Core material js for dropdown -->
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap-material-design.min.js"></script>
    <!--- jquery expense items -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- dropzone css -------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <!-- dropzone js --->
    <script src="dropezone/dropzone.js"></script>
</head>
<?php
    if (!empty($_SESSION["name"]))
    {
        if ($_SESSION["id"] == 1)
        {
    ?>

<body>
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white">
            <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
            <div class="logo">
                <a href="#" class="simple-text logo-mini">
                    Aquifer
                </a>
                <a href="#" class="simple-text logo-normal">
                    Abstractors Ltd
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item active  ">
                        <a class="nav-link" href="menu.php">
                            <i class="material-icons">dashboard</i>
                            <p>Home</p>
                        </a>
                    </li>
                    <!-- your sidebar here -->
                    <li class="nav-item ">
                        <a class="nav-link" href="#">
                            <i class="material-icons"></i>
                            <p>Details</p>
                        </a>
                    </li>
                    <!-- profile -->
                    <li class="nav-item ">
                        <a class="nav-link" href="profile2.php">
                            <i class="material-icons"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:;">Uploaded Projects</a>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end">

                        <form class="navbar-form" id="seach" method="post">
                            <div class="input-group no-border">
                                <input type="text" name="Search" id="Search" class="form-control" placeholder="Search...">
                                <button type="submit" name="sear" id="sear" class="btn btn-white btn-round btn-just-icon">
                                    <i class="material-icons">search</i>
                                </button>
                            </div>
                        </form>

                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i>
                                    <p class="d-lg-none d-md-block">
                                        Account
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="profile2.php">Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="logout.php">Log out</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            <div class="content">
                <div class="container-fluid">
                    <!-- your content here -->
                    <div class="row">
                        <!-- ............................................................................... -->
                        <?php 
                            echo "$output";
                        ?>
                        <!-- display search result -->
                        <div id="DisResult" >
                            
                        </div>
                        <!-- ............................................................................. -->
                    </div>
                </div>
            </div>
			 <!-- _______Pagination____________ -->
			<div class="col-12 d-flex justify-content-center margin-7-half-rem-top lg-margin-5-rem-top xs-margin-4-rem-top wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
            <?php
         
           echo "$pagin"; 
            ?>
			</div>
			<!-- ________ Pagination __________ -->
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="float-left">
                        <ul>
                            <li>
                                Aquifer Abstractors
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright float-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, Designed <i class="material-icons">favorite</i> by
                        <a href="https://coseke.com" target="_blank">Coseke </a> for a better web.
                    </div>
                    <!-- your footer here -->
                </div>
            </footer>
        </div>
    </div>
    <script>
        $(document).ready(function() {
                    $('#sear').click(function() {
                            var valSearch = $("#Search").val();
                            if (valSearch == '') {
                                alert("Cannot be Null");
                                return false;
                            }
                        else{
                             $.ajax({
                             url: "tntup.php",
                             method: "POST",
                             data: $('#seach').serialize(),

                             success: function(data) {
                               $('#DisResult').html(data);
                        }
                    });
                        }
                        });
                    });
    </script>
</body>
<?php
    }
        else { echo "you don't have permission to access this site <br>"; }
    }
    else 
    {
        echo "Kindly Login To Continue <br>";
    }
    ?>
<a href="login.php" title="Login">Login</a>

</html>


