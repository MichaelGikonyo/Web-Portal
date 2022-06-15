<?php
    session_start();
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
                    <li class="nav-item">
                        <a class="nav-link" href="uploadp.php">
                            <i class="material-icons">dashboard</i>
                            <p>Home</p>
                        </a>
                    </li>
                    <!--view uploaded projects -->
                    <li class="nav-item">
                        <a class="nav-link" href="AdminMenu.php">
                            <i class="material-icons"></i>
                            <p>Uploaded Projects</p>
                        </a>
                    </li>
                    <!-- detailed info -->
                    <li class="nav-item ">
                        <a class="nav-link" href="#">
                            <i class="material-icons"></i>
                            <p>Update</p>
                        </a>
                    </li>
                    <!-- your sidebar here -->
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
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
                        <a class="navbar-brand" href="javascript:;">Profile</a>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end">
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
                                    <a class="dropdown-item" href="#">Profile</a>
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
                    <div class="col-md-12">
                        <form id="profile">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">Profile Info</h4>
                                    <p class="card-category"> Edit your Login information</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">@ Email</label>
                                                <input type="text" name="email" id="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Name</label>
                                                <input type="text" name="name" id="name" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Current Password</label>
                                                <input type="password" name="ppass" id="ppass" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">New Password</label>
                                                <input type="password" name="npass" id="npass" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Cornfirm password</label>
                                                <input type="password" name="cpass" id="cpass" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="button" class="btn btn-warning" id="insert" style="float: right;">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>

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
            $('#insert').click(function() {
                var email = $('#email').val();
                var name = $('#name').val();
                var ppass = $('#ppass').val();
                var npass = $('#npass').val();
                var cpass = $('#cpass').val();

                if (email == '') {
                    alert("Please fill Email");
                    return false;
                }
                if (name == '') {
                    alert("Please fill Username");
                    return false;
                }
                if (ppass == '') {
                    alert("Please fill Current Password");
                    return false;
                }
                if (npass == '') {
                    alert("Please fill New Password");
                    return false;
                }
                if (cpass == '') {
                    alert("Please fill Cornfirm Password");
                    return false;
                } else {
                    $.ajax({
                        url: "user.php",
                        method: "POST",
                        data: $('#profile').serialize(),

                        success: function(data) {
                            alert(data);
                            $('#profile')[0].reset();
                        }
                    });
                }

            });
        });
    </script>
</body>
<?php
    }
    else 
    {
        echo "Kindly Login To Continue <br>";
    }
    ?>
<a href="login.php" title="Login">Login</a>

</html>