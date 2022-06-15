<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Aquifer Abstractors</title>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- dropzone css -------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <!-- dropzone js --->
    <script src="dropezone/dropzone.js"></script>
</head>
<?php
    if (!empty($_SESSION["name"]))
        {
        if($_SESSION["id"] == 2)
    {
    ?>

<body>
    <div class="wrapper">
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
                    <li class="nav-item active  ">
                        <a class="nav-link" href="#0">
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
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">
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
                        <a class="navbar-brand" href="javascript:;">Home</a>
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
                                    <a class="dropdown-item" href="profile.php">Profile</a>
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
                    <div class="col-md-12">
                        <form id="form">
                            <fieldset name="info" id="info">
                                <!-- .................................................................................................................................. -->
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title ">Project Info</h4>
                                        <p class="card-category"> Detailed Information of the Project</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Fill In The Location</label>
                                                    <input type="text" name="location" id="location" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Fill In The Client Name</label>
                                                    <input type="text" name="clientname" id="clientname" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Fill In The Start Date</label>
                                                    <input type="date" name="dater" id="dater" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Fill In The End Date</label>
                                                    <input type="date" name="dated" id="dated" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <!-- .................................................................................................................................. -->
                            <fieldset name="add_name" id="add_name">
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
                                                <tbody id="dynamic_field">
                                                    <tr>
                                                        <td><input type="text" name="mname[]" class="form-control" id="expense" required /></td>
                                                        <td><input type="text" name="mdetail[]" class="form-control" id="mdetail" required /></td>
                                                        <td><input type="number" name="mquantity[]" class="form-control mquantity" id="mquantity_1" mfor="1" required /></td>
                                                        <td><input type="number" name="mprice[]" class="form-control mprice" id="mprice_1" mfor="1" required /></td>
                                                        <td><input type="number" name="mamount[]" class="form-control name_list" id="amount_1" mfor="1" readonly /></td>
                                                        <td><button type="button" id="addt" class="btn btn-warning"> + </button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <!-- .................................................................................................................................. -->
                            <fieldset name="add_name" id="DrillingFuel">
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
                                                <tbody id="Drilling_Fuel">
                                                    <tr>
                                                        <td><input type="text" name="dname[]" class="form-control" id="expense" required /></td>
                                                        <td><input type="text" name="ddetail[]" class="form-control" id="mdetail" required /></td>
                                                        <td><input type="number" name="dquantity[]" class="form-control dquantity" id="dquantity_1" dfor="1" required /></td>
                                                        <td><input type="number" name="dprice[]" class="form-control dprice" id="dprice_1" dfor="1" required /></td>
                                                        <td><input type="number" name="damount[]" class="form-control name_list" id="damount_1" dfor="1" readonly /></td>
                                                        <td><button type="button" id="addf" class="btn btn-warning"> + </button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <!-- .................................................................................................................................. -->
                            <fieldset name="add_name" id="DrillingFoam">
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
                                                <tbody id="Drilling_Foam">
                                                    <tr>
                                                        <td><input type="text" name="fname[]" class="form-control" id="expense" required /></td>
                                                        <td><input type="text" name="fdetail[]" class="form-control" id="mdetail" required /></td>
                                                        <td><input type="number" name="fquantity[]" class="form-control fquantity" id="fquantity_1" ffor="1" required /></td>
                                                        <td><input type="number" name="fprice[]" class="form-control fprice" id="fprice_1" ffor="1" required /></td>
                                                        <td><input type="number" name="famount[]" class="form-control name_list" id="famount_1" ffor="1" readonly /></td>
                                                        <td><button type="button" id="addd" class="btn btn-warning"> + </button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <!-- .................................................................................................................................. -->
                            <fieldset name="add_name" id="food_catering">
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
                                                <tbody id="Catering">
                                                    <tr>
                                                        <td><input type="text" name="cname[]" class="form-control" id="expense" required /></td>
                                                        <td><input type="text" name="cdetail[]" class="form-control" id="mdetail" required /></td>
                                                        <td><input type="number" name="cquantity[]" class="form-control cquantity" id="cquantity_1" cfor="1" required /></td>
                                                        <td><input type="number" name="cprice[]" class="form-control cprice" id="cprice_1" cfor="1" required /></td>
                                                        <td><input type="number" name="camount[]" class="form-control name_list" id="camount_1" cfor="1" readonly /></td>
                                                        <td><button type="button" id="addc" class="btn btn-warning"> + </button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <!-- .................................................................................................................................. -->
                            <fieldset name="add_name" id="AutoSpare">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title ">Administrative Expenses</h4>
                                        <p class="card-category">Auto Spare</p>
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
                                                <tbody id="Auto_Spare">
                                                    <tr>
                                                        <td><input type="text" name="aname[]" class="form-control" id="expense" required /></td>
                                                        <td><input type="text" name="adetail[]" class="form-control" id="mdetail" required /></td>
                                                        <td><input type="number" name="aquantity[]" class="form-control aquantity" id="aquantity_1" afor="1" required /></td>
                                                        <td><input type="number" name="aprice[]" class="form-control aprice" id="aprice_1" afor="1" required /></td>
                                                        <td><input type="number" name="aamount[]" class="form-control name_list" id="aamount_1" afor="1" readonly /></td>
                                                        <td><button type="button" id="adds" class="btn btn-warning"> + </button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <!-- .................................................................................................................................. -->
                            <fieldset name="add_name" id="Communication_Net">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title ">Administrative Expenses</h4>
                                        <p class="card-category">Communication</p>
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
                                                <tbody id="Communication">
                                                    <tr>
                                                        <td><input type="text" name="nname[]" class="form-control" id="expense" required /></td>
                                                        <td><input type="text" name="ndetail[]" class="form-control" id="mdetail" required /></td>
                                                        <td><input type="number" name="nquantity[]" class="form-control nquantity" id="nquantity_1" nfor="1" required /></td>
                                                        <td><input type="number" name="nprice[]" class="form-control nprice" id="nprice_1" nfor="1" required /></td>
                                                        <td><input type="number" name="namount[]" class="form-control name_list" id="namount_1" nfor="1" readonly /></td>
                                                        <td><button type="button" id="addm" class="btn btn-warning"> + </button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <!-- .................................................................................................................................. -->
                            <fieldset name="add_name" id="Miscellaneous_n">
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
                                                <tbody id="Miscellaneous">
                                                    <tr>
                                                        <td><input type="text" name="sname[]" class="form-control" id="expense" required /></td>
                                                        <td><input type="text" name="sdetail[]" class="form-control" id="mdetail" required /></td>
                                                        <td><input type="number" name="squantity[]" class="form-control squantity" id="squantity_1" sfor="1" required /></td>
                                                        <td><input type="number" name="sprice[]" class="form-control sprice" id="sprice_1" sfor="1" required /></td>
                                                        <td><input type="number" name="samount[]" class="form-control name_list" id="samount_1" sfor="1" readonly /></td>
                                                        <td><button type="button" id="adde" class="btn btn-warning"> + </button></td>
                                                    </tr>
                                                </tbody>
                                                <tfoot class=" text-primary">
                                                    <th></th>
                                                    <th> Total Ksh:<span type="text" id="totalsum" class="totalsum" name="Total"></span> </th>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <!-- .................................................................................................................................. -->
                            <div>
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title ">Images &amp; Files</h4>
                                        <p class="card-category">Images &amp; pdf files For the Project</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="dropzone" id="dropzoneFrom" action="info.php"></div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-warning" id="insert" name="insert" style="float: right;">Submit Form</button>
                            <!-- .................................................................................................................................. -->
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
        Dropzone.autoDiscover = false;
        $(document).ready(function() {
            // **************************************** project movement start ********************************************
            var i = 1;
            $('#addt').click(function() {
                i++;
                $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="mname[]" class="form-control" id="expense" required /></td><td><input type="text" name="mdetail[]" class="form-control" id="mdetail" required /></td><td><input type="number" name="mquantity[]" class="form-control mquantity" id="mquantity_'+i+'" mfor="'+i+'" required /></td><td><input type="number" name="mprice[]" class="form-control mprice" id="mprice_'+i+'" mfor="'+i+'" required /></td><td><input type="number" name="mamount[]" class="form-control name_list" id="amount_'+i+'" mfor="'+i+'" readonly/></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
            });
            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
                calcsum();
            });
            // **************************************** project movement End ********************************************

            // **************************************** project drilling fuel start ********************************************
            var f = 1;
            $('#addf').click(function() {
                f++;
                $('#Drilling_Fuel').append('<tr id="row_f'+f+'"><td><input type="text" name="dname[]" class="form-control" id="expense" required /></td><td><input type="text" name="ddetail[]" class="form-control" id="mdetail" required /></td><td><input type="number" name="dquantity[]" class="form-control dquantity" id="dquantity_'+f+'" dfor="'+f+'" required /></td><td><input type="number" name="dprice[]" class="form-control dprice" id="dprice_'+f+'" dfor="'+f+'" required /></td><td><input type="number" name="damount[]" class="form-control name_list" id="damount_'+f+'" dfor="'+f+'" readonly /></td><td><button type="button" name="remove" id="'+f+'" class="btn btn-danger btn_remove_f">X</button></td></tr>');
            });
            $(document).on('click', '.btn_remove_f', function() {
                var button_id_f = $(this).attr("id");
                $('#row_f' + button_id_f + '').remove();
                calcsum();
            });
            // **************************************** project driling fuel End ********************************************

            // **************************************** project drilling foam start ********************************************
            var d = 1;
            $('#addd').click(function() {
                d++;
                $('#Drilling_Foam').append('<tr id="row_d'+d+'"><td><input type="text" name="fname[]" class="form-control" id="expense" required /></td><td><input type="text" name="fdetail[]" class="form-control" id="mdetail" required /></td><td><input type="number" name="fquantity[]" class="form-control fquantity" id="fquantity_'+d+'" ffor="'+d+'" required /></td><td><input type="number" name="fprice[]" class="form-control fprice" id="fprice_'+d+'" ffor="'+d+'" required /></td><td><input type="number" name="famount[]" class="form-control name_list" id="famount_'+d+'" ffor="'+d+'" readonly /></td><td><button type="button" name="remove" id="'+d+'" class="btn btn-danger btn_remove_d">X</button></td></tr>');
            });
            $(document).on('click', '.btn_remove_d', function() {
                var button_id = $(this).attr("id");
                $('#row_d' + button_id + '').remove();
                calcsum();
            });
            // **************************************** project driling foam End ********************************************

            // **************************************** project Catering start ********************************************
            var c = 1;
            $('#addc').click(function() {
                c++;
                $('#Catering').append('<tr id="row_c'+c+'"><td><input type="text" name="cname[]" class="form-control" id="expense" required /></td><td><input type="text" name="cdetail[]" class="form-control" id="mdetail" required /></td><td><input type="number" name="cquantity[]" class="form-control cquantity" id="cquantity_'+c+'" cfor="'+c+'" required /></td><td><input type="number" name="cprice[]" class="form-control cprice" id="cprice_'+c+'" cfor="'+c+'" required /></td><td><input type="number" name="camount[]" class="form-control name_list" id="camount_'+c+'" cfor="'+c+'" readonly /></td><td><button type="button" name="remove" id="'+c+'" class="btn btn-danger btn_remove_c">X</button></td></tr>');
            });
            $(document).on('click', '.btn_remove_c', function() {
                var button_id = $(this).attr("id");
                $('#row_c' + button_id + '').remove();
                calcsum();
            });
            // **************************************** project Catering foam End ********************************************

            // **************************************** project Auto spares start ********************************************
            var s = 1;
            $('#adds').click(function() {
                s++;
                $('#Auto_Spare').append('<tr id="row_s'+s+'"><td><input type="text" name="aname[]" class="form-control" id="expense" required /></td><td><input type="text" name="adetail[]" class="form-control" id="mdetail" required /></td><td><input type="number" name="aquantity[]" class="form-control aquantity" id="aquantity_'+s+'" afor="'+s+'" required /></td><td><input type="number" name="aprice[]" class="form-control aprice" id="aprice_'+s+'" afor="'+s+'" required /></td><td><input type="number" name="aamount[]" class="form-control name_list" id="aamount_'+s+'" afor="'+s+'" readonly /></td><td><button type="button" name="remove" id="'+s+'" class="btn btn-danger btn_remove_s">X</button></td></tr>');
            });
            $(document).on('click', '.btn_remove_s', function() {
                var button_id = $(this).attr("id");
                $('#row_s' + button_id + '').remove();
                calcsum();
            });
            // **************************************** project Auto spares End ********************************************

            // **************************************** project Communication start ********************************************
            var m = 1;
            $('#addm').click(function() {
                m++;
                $('#Communication').append('<tr id="row_m'+m+'"><td><input type="text" name="nname[]" class="form-control" id="expense" required /></td><td><input type="text" name="ndetail[]" class="form-control" id="mdetail" required /></td><td><input type="number" name="nquantity[]" class="form-control nquantity" id="nquantity_'+m+'" nfor="'+m+'" required /></td><td><input type="number" name="nprice[]" class="form-control nprice" id="nprice_'+m+'" nfor="'+m+'" required /></td><td><input type="number" name="namount[]" class="form-control name_list" id="namount_'+m+'" nfor="'+m+'" required /></td><td><button type="button" name="remove" id="'+m+'" class="btn btn-danger btn_remove_m">X</button></td></tr>');
            });
            $(document).on('click', '.btn_remove_m', function() {
                var button_id = $(this).attr("id");
                $('#row_m' + button_id + '').remove();
                calcsum();
            });
            // **************************************** project Communication End ********************************************

            // **************************************** project Miscellaneous start ********************************************
            var e = 1;
            $('#adde').click(function() {
                e++;
                $('#Miscellaneous').append('<tr id="row_e'+e+'"><td><input type="text" name="sname[]" class="form-control" id="expense" required /></td><td><input type="text" name="sdetail[]" class="form-control" id="mdetail" required /></td><td><input type="number" name="squantity[]" class="form-control squantity" id="squantity_'+e+'" sfor="'+e+'" required /></td><td><input type="number" name="sprice[]" class="form-control sprice" id="sprice_'+e+'" sfor="'+e+'" required /></td><td><input type="number" name="samount[]" class="form-control name_list" id="samount_'+e+'" sfor="'+e+'" readonly /></td><td><button type="button" name="remove" id="'+e+'" class="btn btn-danger btn_remove_e">X</button></td></tr>');
            });
            $(document).on('click', '.btn_remove_e', function() {
                var button_id = $(this).attr("id");
                $('#row_e' + button_id + '').remove();
                calcsum();
            });
            // **************************************** project Miscellaneous End ****************************************
            
            
            //******************************* on row change movement *************************************
            $("#dynamic_field").on('input', 'input.mquantity,input.mprice', function() {
                getTotalCost($(this).attr("mfor"));
            });
            //******************************* on row change movement End *************************************
            //******************************* do sum of the row movement ***********************************
            function getTotalCost(ind) {
                var qty = $('#mquantity_'+ind).val();
                var price = $('#mprice_'+ind).val();
                var totNumber = (qty * price);
                var tot = totNumber.toFixed(2);
                $('#amount_'+ind).val(tot);
                calcsum();
            }
            //******************************* do sum of the row movement End************************************
            //******************************* on row change Drilling Fuel *************************************
            $("#Drilling_Fuel").on('input', 'input.dquantity,input.dprice', function() {
                DgetTotalCost($(this).attr("dfor"));
            });
            //******************************* on row change Drilling Fuel End *************************************
            //******************************* do sum of the row Drilling Fuel ***********************************
            function DgetTotalCost(ind) {
                var qty = $('#dquantity_'+ind).val();
                var price = $('#dprice_'+ind).val();
                var totNumber = (qty * price);
                var tot = totNumber.toFixed(2);
                $('#damount_'+ind).val(tot);
                calcsum();
            }
            //******************************* do sum of the row Drilling Fuel End************************************
            //******************************* on row change Drilling Foam *************************************
            $("#Drilling_Foam").on('input', 'input.fquantity,input.fprice', function() {
                FgetTotalCost($(this).attr("ffor"));
            });
            //******************************* on row change Drilling Foam End *************************************
            //******************************* do sum of the row Drilling Foam ***********************************
            function FgetTotalCost(ind) {
                var qty = $('#fquantity_'+ind).val();
                var price = $('#fprice_'+ind).val();
                var totNumber = (qty * price);
                var tot = totNumber.toFixed(2);
                $('#famount_'+ind).val(tot);
                calcsum();
            }
            //******************************* do sum of the row Drilling Foam End************************************
            //******************************* on row change Catering*************************************
            $("#Catering").on('input', 'input.cquantity,input.cprice', function() {
                CgetTotalCost($(this).attr("cfor"));
            });
            //******************************* on row change Catering End *************************************
            //******************************* do sum of the row Catering ***********************************
            function CgetTotalCost(ind) {
                var qty = $('#cquantity_'+ind).val();
                var price = $('#cprice_'+ind).val();
                var totNumber = (qty * price);
                var tot = totNumber.toFixed(2);
                $('#camount_'+ind).val(tot);
                calcsum();
            }
            //******************************* do sum of the row Catering End************************************
            //******************************* on row change Auto_Spare*************************************
            $("#Auto_Spare").on('input', 'input.aquantity,input.aprice', function() {
                AgetTotalCost($(this).attr("afor"));
            });
            //******************************* on row change Auto_Spare End *************************************
            //******************************* do sum of the row Auto_Spare ***********************************
            function AgetTotalCost(ind) {
                var qty = $('#aquantity_'+ind).val();
                var price = $('#aprice_'+ind).val();
                var totNumber = (qty * price);
                var tot = totNumber.toFixed(2);
                $('#aamount_'+ind).val(tot);
                calcsum();
            }
            //******************************* do sum of the row Auto_Spare End************************************
            //******************************* on row change Communication*************************************
            $("#Communication").on('input', 'input.nquantity,input.nprice', function() {
                NAgetTotalCost($(this).attr("nfor"));
            });
            //******************************* on row change Communication End *************************************
            //******************************* do sum of the row Communication ***********************************
            function NAgetTotalCost(ind) {
                var qty = $('#nquantity_'+ind).val();
                var price = $('#nprice_'+ind).val();
                var totNumber = (qty * price);
                var tot = totNumber.toFixed(2);
                $('#namount_'+ind).val(tot);
                calcsum();
            }
            //******************************* do sum of the row Communication End************************************
            //******************************* on row change Miscellaneous*************************************
            $("#Miscellaneous").on('input', 'input.squantity,input.sprice', function() {
                SAgetTotalCost($(this).attr("sfor"));
            });
            //******************************* on row change Miscellaneous End *************************************
            //******************************* do sum of the row Miscellaneous ***********************************
            function SAgetTotalCost(ind) {
                var qty = $('#squantity_'+ind).val();
                var price = $('#sprice_'+ind).val();
                var totNumber = (qty * price);
                var tot = totNumber.toFixed(2);
                $('#samount_'+ind).val(tot);
                calcsum();
            }
            //******************************* do sum of the row Miscellaneous End************************************
            
            
            //*****************************************  do sum  ****************************************************
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
            //on table changes
            $("table").on("keyup", ".name_list", function() {
                calcsum();
            });
            /// ********************************************** sum end  ************************************************

            // ******************************** upload into db ***********************************
            $('#insert').click(function() {
                //////fields validate
                var loc = $('#location').val();
                var cn = $('#clientname').val();
                var st = $('#dater').val();
                var en = $('#dated').val();
                var ei = $('#expense').val();
                var ia = $('#amount').val();
                if (loc == '') {
                    alert("Please fill location");
                    return false;
                }
                if (cn == '') {
                    alert("Please fill clientname");
                    return false;
                }
                if (st == '') {
                    alert("Please fill Start Date");
                    return false;
                }
                if (en == '') {
                    alert("Please fill End Date");
                    return false;
                }
                if (ei == '') {
                    alert("Please fill Expense Item");
                    return false;
                }
                if (ia == '') {
                    alert("Please fill The Amount");
                    return false;
                } else {
                    $.ajax({
                        url: "info.php",
                        method: "POST",
                        data: $('#info, #add_name, #DrillingFuel, #DrillingFoam, #food_catering, #AutoSpare, #Communication_Net, #Miscellaneous_n').serialize(),

                        success: function(data) {
                            alert(data);
                            $('#form')[0].reset();
                        }
                    });
                    ///////////////////
                    myDropzone.processQueue();
                    myDropzone.on("complete", function() {
                        myDropzone.removeAllFiles();
                    });
                    /////////////// 
                }
                // ******************************** upload into db ***********************************

            });
            ///// *********************************************** dropzone server ************************* ****************
            var myDropzone = new Dropzone(".dropzone", {
                autoProcessQueue: false,
                acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg,.pdf",
                addRemoveLinks: true,
                parallelUploads: 100,
                paramName: 'drop',
                maxFilesize: 5.0, // MB
                post_max_size: 100

            });
            ///// *********************************************** dropzone server ************************* ****************
        });
    </script>
</body>
<?php
    }
        else {echo "you don't have permission to access this site <br>";}
    }
    else 
    {
        echo "Kindly Login To Continue <br>";
    }
    ?>
<a href="login.php" title="Login">Login</a>

</html>