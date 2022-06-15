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
    <!--  image css --->

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css" rel="stylesheet">

    <!--- jquery expense items -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
</head>
<?php
    if (!empty($_SESSION["name"]))
    {
    ?>

<body onload="calcsum()">
    <section class="gallery-block compact-gallery">
        <div class="wrapper ">
            <div class="sidebar" data-color="purple" data-background-color="white">
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
                        <li class="nav-item ">
                            <a class="nav-link" href="menu.php">
                                <i class="material-icons">dashboard</i>
                                <p>Home</p>
                            </a>
                        </li>
                        <!-- your sidebar here -->
                        <li class="nav-item active ">
                            <a class="nav-link" href="#">
                                <i class="material-icons"></i>
                                <p>Details</p>
                            </a>
                        </li>
                        <!-- Profile -->
                        <li class="nav-item ">
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
                            <a class="navbar-brand" href="javascript:;">Uploaded Projects</a>
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
                        <div class="col-md-12">
                            <!-- your content here -->
                            <!-- .................................................................................................................................. -->
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title ">Project Info</h4>
                                        <p class="card-category"> Detailed Information of the Project</p>
                                    </div>
                                    <div class="card-body">
                                        <?php 
                                echo "$info";
                                ?>
                                    </div>
                                </div>
                            </div>
                            <!-- .................................................................................................................................. -->
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">Administrative Expenses</h4>
                                    <p class="card-category">Movement</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>Expense Items</th>
                                                <th>Details</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Total Amount</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                echo "$adminexp";
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- .................................................................................................................................. -->
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">Administrative Expenses</h4>
                                    <p class="card-category">Drilling Fuel</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>Expense Items</th>
                                                <th>Details</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Total Amount</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                echo "$drillFuel";
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- .................................................................................................................................. -->
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">Administrative Expenses</h4>
                                    <p class="card-category">Drilling Foam</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>Expense Items</th>
                                                <th>Details</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Total Amount</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                echo "$drillFoam";
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- .................................................................................................................................. -->
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">Administrative Expenses</h4>
                                    <p class="card-category">Catering</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>Expense Items</th>
                                                <th>Details</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Total Amount</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                echo "$catering";
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- .................................................................................................................................. -->
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">Administrative Expenses</h4>
                                    <p class="card-category">Auto Spare Parts</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>Expense Items</th>
                                                <th>Details</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Total Amount</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                echo "$AutoSpare";
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- .................................................................................................................................. -->
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">Administrative Expenses</h4>
                                    <p class="card-category">Communictation</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>Expense Items</th>
                                                <th>Details</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Total Amount</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                echo "$Comm";
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- .................................................................................................................................. -->
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">Administrative Expenses</h4>
                                    <p class="card-category">Miscellaneous</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>Expense Items</th>
                                                <th>Details</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Total Amount</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                echo "$Misc";
                                                ?>
                                            </tbody>
                                            <tfoot class=" text-primary">
                                                <th></th>
                                                <th> Total Ksh: <span type="text" id="totalsum" class="totalsum" name="Total"></span> </th>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- .................................................................................................................................. -->
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">Images &amp; Files</h4>
                                    <p class="card-category">Images &amp; pdf files For the Project</p>
                                </div>
                                <div class="card-body">
                                    <div class="tz-gallery">
                                        <div class="row no-gutters">

                                            <!-- +++++++++++++++++++++++++++++++++++++ -->
                                            <?php echo "$imgs" ?>
                                            <!-- +++++++++++++++++++++++++++++++++++++ -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- .................................................................................................................................. -->
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
    </section>
</body>
<script>
    function calcsum() {
        var sum = 0;
        $('.name_list').each(function() {
            //add only if the value is number
            if (!isNaN(this.value) && this.value.length != 0) {
                sum += parseFloat(this.value);
            }
        });
        $(".totalsum").html(sum.toFixed(2));

    }

    $("table").on("keyup", ".name_list", function() {
        calcsum();
    });
    //
</script>
<!--  image js --->
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script src="mdb/baguette.js"></script>
<?php
    }
    else 
    {
        echo "Kindly Login To Continue <br>";
    }
    ?>
<a href="login.php" title="Login">Login</a>

</html>