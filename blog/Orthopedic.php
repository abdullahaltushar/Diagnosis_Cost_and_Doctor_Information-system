
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Orthopedic</title>
    <!--    <link rel="stylesheet" href="../assets/css/style.css">-->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <!--    <link rel="stylesheet" href="https://maxcdin.bootstrapcd.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
    <!--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <!--    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
    <!--    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>-->

    <!-- Need to use datatables.net -->
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

    <?php include 'nav.php' ?>
    <?php
    $con=mysqli_connect('localhost','root','','doctor');

    $sql="SELECT * FROM `orthopedic`";
    mysqli_select_db($con,'doctor');
    $query=mysqli_query($con,$sql);
    if($query){

        $resource_id=mysqli_query($con,$sql);

    }
    else{
        die("no".mysqli_error($con));
    }

    ?>


    <h4 class=" text-center bg-dark font-weight-bold text-white ml-5"> অর্থোপেডিক স্পেশালিস্ট (
        Orthopedic Specialist)</h4>
    <div class="container border-0" style="margin-left: 200px;">
        <div class="row ml-5" >

            <div class="card float-left border-0">
                <div class="card-title">

                </div>
                <div class="card-body float-left">
                    <div> <?php while($result=mysqli_fetch_assoc($resource_id)){ ?></div>
                    <h6><img src="<?php echo $result['image']; ?>"></h6>
                    <h5><a href=""> <?php echo $result['name'] ?></a></h5>
                    <h6 class="font-weight-bold"><?php echo $result['title'] ?> </h6>
                    <p>Department of <?php echo $result['department'] ?><br><?php echo $result['appointment'] ?><br>
                        Appointment: <?php echo $result['time'] ?><br>
                        camber:  <?php echo $result['camber'] ?><br>
                        day off:  <?php echo $result['off'] ?><br>
                        serial:  <?php echo $result['serial'] ?></p>

                    <div><?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>















    <div class="container-fluid padding bg-dark" style="color:white">
        <div class="row text-center ">
            <div class="col-md-4">
                <img src="img/index.jpg">
                <hr class="bg-light">
                <p>01531-584509</p>
                <p>abdullahaltushar12@gmail.com</p>
                <p>chittagong</p>
            </div>
            <div class="col-md-4">
                <h3>Our help time</h3>
                <hr class="bg-light">
                <p>8am -8pm</p>
                <p>01531-584509</p>
            </div>
            <div class="col-md-4">
                <h3>Emergency contact</h3>
                <hr class="bg-light">
                <p>018aa-aaaaaa</p>
                <p>015aa-gggggg</p>
            </div>
        </div>
    </div>




    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js">

    </script>

    <script>
        $(document).ready(function(){

            //Apply the datatables plugin to your table
            $('#myTable').DataTable();

        });
    </script>
    <script>
        $(document).ready(function() {
            // executes when HTML-Document is loaded and DOM is ready

// breakpoint and up
            $(window).resize(function(){
                if ($(window).width() >= 980){

                    // when you hover a toggle show its dropdown menu
                    $(".navbar .dropdown-toggle").hover(function () {
                        $(this).parent().toggleClass("show");
                        $(this).parent().find(".dropdown-menu").toggleClass("show");
                    });

                    // hide the menu when the mouse leaves the dropdown
                    $( ".navbar .dropdown-menu" ).mouseleave(function() {
                        $(this).removeClass("show");
                    });

                    // do something here
                }
            });



// document ready
        });
    </script>

    <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
    </script>

</body>
</html>











