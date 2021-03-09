<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="doctor";
$con=mysqli_connect($hostname,$username,$password,$dbname);
mysqli_select_db($con,'doctor');
if(isset($_POST['btn'])) {

    $query="INSERT INTO `blood`( `name`, `email`, `location`, `number`, `blood`, `gender`) VALUES ('$_POST[name]','$_POST[email]','$_POST[location]','$_POST[number]','$_POST[blood]','$_POST[gender]')";

    $query=mysqli_query($con,$query);
    if($query){
        echo 'data save';

    }
    else{
        die("not select".mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>member</title>
    <!--    <link rel="stylesheet" href="../assets/css/style.css">-->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Mini-extra style to be apply to tables with the dataTable plugin  -->
    <style>
        .dataTable table tr {
            border: solid 1px black;
        }
        .navbar .dropdown-menu div[class*="col"] {
            margin-bottom:1rem;
        }

        .navbar .dropdown-menu {
            border:none;
            background-color:white!important;
        }

        /* breakpoint and up - mega dropdown styles */
        @media screen and (min-width: 992px) {

            /* remove the padding from the navbar so the dropdown hover state is not broken */
            .navbar {
                padding-top:0px;
                padding-bottom:0px;
            }

            /* remove the padding from the nav-item and add some margin to give some breathing room on hovers */
            .navbar .nav-item {
                padding:.5rem .5rem;
                margin:0 .25rem;
            }

            /* makes the dropdown full width  */
            .navbar .dropdown {position:static;}

            .navbar .dropdown-menu {
                width:100%;
                left:0;
                right:0;
                /*  height of nav-item  */
                top:45px;
            }

            /* shows the dropdown menu on hover */
            .navbar .dropdown:hover .dropdown-menu, .navbar .dropdown .dropdown-menu:hover {
                display:block!important;
            }

            .navbar .dropdown-menu {
                border: 1px solid rgba(0,0,0,.15);
                background-color: #fff;
            }

        }
        .thumbnail {
            position:relative;
            overflow:hidden;
        }

        .caption {
            position:absolute;
            top:0;
            right:0;
            background:rgba(90, 90, 90, 0.75);
            width:100%;
            height:100%;
            padding:2%;
            display: none;
            text-align: left;
            color:#fff !important;
            z-index:2;
        }

    </style>
</head>
<body>
<div class="container-fluid">
    <header style="margin-top:10px ">
        <div class=" m-auto d-block">
            <form class="form-inline" action="" method="post" >


                <input class="form-control form-control-sm ml-3 w-75  rounded-pill" type="text" placeholder="Search" aria-label="Search">
                <div class="input-group-append" id="button-addon4" style="margin-left: 20px">
                    <select class="custom-select rounded-pill border-0" id="inputGroupSelect02">
                        <option selected>chosse...</option>
                        <option value="1">Doctor List</option>
                        <option value="2">Diagnostic center</option>
                        <option value="3">Diagnostic cost</option>
                        <option value="4">Hospital</option>
                        <option value="5">Ambulance</option>
                        <option value="6">Blood Bank</option>
                        <option value="7">Others</option>
                    </select>
                    <div class="input-group-append " id="button-addon4">
                        <button class="btn aqua-gradient btn-rounded btn-sm my-0 rounded-pill" type="submit" style="background: darkblue;color: white;margin-left: 10px">Search</button>

                    </div>
                </div>
            </form>
        </div>
    </header>

    <!--    </nav>-->
    <?php include 'nav.php' ?>
    <!---section---->
    <div>
        <h1 align="center" class="gv ml-auto mr-auto text-success font-weight-bold" style="font-size:30px;">MEMBER </h1>

        <div class="container">
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <div class="card-title">
                        <p align="center"><b><i></i></b></p>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row">
                                <label  class="col-sm-3 col-form-label">NAME:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name"  placeholder="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-3 col-form-label">EMAIL:</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email"  placeholder="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-3 col-form-label">Location:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="location"  placeholder="location">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-3 col-form-label">number:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="number"  placeholder="number">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label  class="col-sm-3 col-form-label">Blood Group:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="blood"  placeholder="blood">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-3 col-form-label">Gender</label>
                                <div class="col-sm-9">
                                    <input type="radio" name="gender" value="Male">Male
                                    <input type="radio" name="gender" value="Female">Female
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" name="btn" class="btn btn-success btn-block ">Sign in</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>


            </div>
        </div>
</body>
</html>

