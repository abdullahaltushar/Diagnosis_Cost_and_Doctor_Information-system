<?php
/**
 * Created by PhpStorm.
 * User: Abdullah Al Tushar
 * Date: 8/20/2019
 * Time: 8:47 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">


    <title>page</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdin.bootstrapcd.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <!---new-->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>



    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .zoomin img {
            height: 70px;
            width: 70px;
            -webkit-transition: all 1s ease;
            -moz-transition: all 1s ease;
            -ms-transition: all 1s ease;
            transition: all 1s ease;
        }
        .zoomin img:hover {
            width: 300px;
            height: 300px;
        }


    <!-- Mini-extra style to be apply to tables with the dataTable plugin  -->

        .dataTable table tr {
            border: solid 1px black;
        }
    </style>
</head>
<body>


<div class="container-fluid">
<!--    <header style="margin-top:10px " >-->
<!--        <form class="form-inline" action="" method="post">-->
<!---->
<!--            <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search">-->
<!--            <button class="btn aqua-gradient btn-rounded btn-sm my-0" type="submit" style="background: darkblue;color: white;margin-left: 10px">Search</button>-->
<!--        </form>-->
<!--    </header>-->
    <!--- navbar ---->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="#"><img src="../img/index.jpg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="doctor%20list.php">Doctor list</a>
                <a class="nav-item nav-link" href="#">Diagnostic cost</a>
                <a class="nav-item nav-link" href="#">Diagnostic center list</a>
                <a class="nav-item nav-link" href="#">Ambulance service</a>
            </div>
        </div>
    </nav>

    <section>

        <?php
        //$connection =mysqli_connect('localhost','root','','doctor');
        //if(isset($_POST['submit'])) {
        //    if($connection){
        //        // echo'server connect';
        //        $db_select=mysqli_select_db($connection,'doctor');
        //        if($db_select){
        //            echo'select';
        //
        //        }
        //        else{
        //            die("data not selec".mysqli_error($db_select));
        //        }
        //    }
        //    else {
        //
        //        die("sever not connect" . mysqli_error($connection));
        //    }
        //    $displayQuery="select * from doctorlist_tb";
        //    $$resource_id=mysqli_query($connection,$displayQuery);
        ////                $row=mysqli_num_rows($querydisplay);
        //
        //}
        //?>

        <div class="container">
            <div class="table-responsive">
                <h4 class="text-center text-white bg-dark">Cardiology</h4>
                <table class="table table-bordered table-striped table-hover text-center" align="center" id="myNewTable" style="border:solid 1px black">
                    <thead class="thead-dark">
                    <tr align="center" >
                        <!--                <th class="id" scope="col">ID</th>-->
                        <th class="doctor_profile" scope="col">Doctor Profile</th>
                        <th class="appointment" scope="col">Appointment</th>
                        <!--                <th class="clinic">Clinic name</th>-->
                        <!--                <th class="category">category</th>-->


                    </tr>
                    </thead>
                    <tbody class="bg-white text-black">
                    <?php
                    $connection =mysqli_connect('localhost','root','','doctor');
                    if ($connection) {
                        // echo'server connect';
                        $db_select = mysqli_select_db($connection, 'doctor');
                        if ($db_select) {
//                        echo 'select';

                        } else {
                            die("data not selec" . mysqli_error($db_select));
                        }
                    } else {

                        die("sever not connect" . mysqli_error($connection));
                    }
                    $displayQuery = "select * from doctorlist_tb";
                    $querydisplay = mysqli_query($connection, $displayQuery);
                    //                $row=mysqli_num_rows($querydisplay);
                    while ($result = mysqli_fetch_array($querydisplay)) {
                        ?>

                        <tr>
                            <!--                        <td scope="row">--><?php //echo $result['id']; ?><!--</td>-->
                            <td>
                                <div class="zoomin">
                                    <img src=" <?php echo $result['image']; ?>" width="50px" height="50px" >
                                </div>
                                <h3><?php echo $result['doctor_name']; ?></h3>
                                <hr>
                                <?php echo $result['description']; ?>

                            </td>
                            <td><?php echo $result['appointment']; ?><br>
                                <h5><a href="https://www.google.com/maps/place/Chevron+Clinical+Laboratory+(Pte)+Ltd./@22.3633671,91.8279182,17z/data=!4m12!1m6!3m5!1s0x30acd882466f3cd5:0x76e1e90c3e52b47b!2sChevron+Clinical+Laboratory+(Pte)+Ltd.!8m2!3d22.3633671!4d91.8301069!3m4!1s0x30acd882466f3cd5:0x76e1e90c3e52b47b!8m2!3d22.3633671!4d91.8301069">   <?php echo $result['clinic_name']; ?></a></h5>
                                <hr>
                                <h5> Serial : <?php echo $result['number']; ?></h5>
                            </td>
                            <!--                        <td>--><?php //echo $result['clinic_name']; ?><!--</td>-->
                            <!--                        <td>--><?php //echo $result['category']; ?><!--</td>-->

                        </tr>
                        <?php
                    }?>
                    </tbody>
                </table>

            </div>
        </div>

    </section>
    <div class="card-title">
        <a href="" class="bg-dark"><h3 class="card-title">Cardiology</h3></a>
        <div class="card-text"><p class="card-text">যাদের হৃদপিণ্ড বা সঞ্চালনের সমস্যা রয়েছে </p>
        



        </div>
    </div>
    <div class="card-title">
        <a href="" class="bg-dark"><h3 class="card-title"> General Surgery </h3></a>
        <div class="card-text"><p class="card-text"> রোগীদের উপর বিভিন্ন ধরণের শল্য চিকিত্সা এবং পদ্ধতিগুলি জুড়ে। </p></div>
    </div>
    <div class="card-title">
        <a href="" class="bg-dark"><h3 class="card-title">Gynecology  </h3></a>
        <div class="card-text"><p class="card-text"> এন্ডোমেট্রিওসিস, বন্ধ্যাত্ব এবং অসংলগ্নতার মতো মহিলা মূত্রনালী এবং প্রজনন অঙ্গ সম্পর্কিত সমস্যাগুলি অনুসন্ধান করে   </p>
            </p></div>
    </div>
    <div class="card-title">
        <a href="" class="bg-dark"><h3 class="card-title"> Gastroenterology </h3></a>
        <div class="card-text"><p class="card-text">  হজম  গ্যাস্ট্রোইনটেস্টাইনাল রোগগুলির তদন্ত করে এবং তার চিকিৎসা করে।             </p></div>
    </div>
    <div class="card-title">
        <a href="" class="bg-dark"><h3 class="card-title">  Haematology </h3></a>
        <div class="card-text"><p class="card-text">             </p></div>
    </div>
    <div class="card-title">
        <a href="" class="bg-dark"><h3 class="card-title"> Human Resources </h3></a>
        <div class="card-text"><p class="card-text">             </p></div>
    </div> <div class="card-title">
        <a href="" class="bg-dark"><h3 class="card-title"> Infection Control </h3></a>
        <div class="card-text"><p class="card-text">             </p></div>
    </div> <div class="card-title">
        <a href="" class="bg-dark"><h3 class="card-title"> Maternity  </h3></a>
        <div class="card-text"><p class="card-text">             </p></div>
    </div> <div class="card-title">
        <a href="" class="bg-dark"><h3 class="card-title">  Microbiology </h3></a>
        <div class="card-text"><p class="card-text">             </p></div>
    </div> <div class="card-title">
        <a href="" class="bg-dark"><h3 class="card-title"> Neonatal </h3></a>
        <div class="card-text"><p class="card-text">             </p></div>
    </div> <div class="card-title">
        <a href="" class="bg-dark"><h3 class="card-title"> Nephrology </h3></a>
        <div class="card-text"><p class="card-text">             </p></div>
    </div> <div class="card-title">
        <a href="" class="bg-dark"><h3 class="card-title"> Neurology  </h3></a>
        <div class="card-text"><p class="card-text">             </p></div>
    </div> <div class="card-title">
        <a href="" class="bg-dark"><h3 class="card-title"> Nutrition and Dietetics  </h3></a>
        <div class="card-text"><p class="card-text">             </p></div>
    </div> <div class="card-title">
        <a href="" class="bg-dark"><h3 class="card-title">  Obstetrics/Gynecology </h3></a>
        <div class="card-text"><p class="card-text">             </p></div>
    </div> <div class="card-title">
        <a href="" class="bg-dark"><h3 class="card-title"> Oncology  </h3></a>
        <div class="card-text"><p class="card-text">             </p></div>
    </div> <div class="card-title">
        <a href="" class="bg-dark"><h3 class="card-title"> Ophthalmology </h3></a>
        <div class="card-text"><p class="card-text">             </p></div>
    </div> <div class="card-title">
        <a href="" class="bg-dark"><h3 class="card-title">  Orthopaedics  </h3></a>
        <div class="card-text"><p class="card-text">             </p></div>
    </div> <div class="card-title">
        <a href="" class="bg-dark"><h3 class="card-title">  Otolaryngology </h3></a>
        <div class="card-text"><p class="card-text">             </p></div>
    </div> <div class="card-title">
        <a href="" class="bg-dark"><h3 class="card-title"> Physiotherapy  </h3></a>
        <div class="card-text"><p class="card-text">             </p></div>
    </div> <div class="card-title">
        <a href="" class="bg-dark"><h3 class="card-title"> Radiology  </h3></a>
        <div class="card-text"><p class="card-text">             </p></div>
    </div> <div class="card-title">
        <a href="" class="bg-dark"><h3 class="card-title">Radiotherapy  </h3></a>
        <div class="card-text"><p class="card-text">             </p></div>
    </div> <div class="card-title">
        <a href="" class="bg-dark"><h3 class="card-title"> Renal </h3></a>
        <div class="card-text"><p class="card-text">             </p></div>
    </div> <div class="card-title">
        <a href="" class="bg-dark"><h3 class="card-title">Rheumatology   </h3></a>
        <div class="card-text"><p class="card-text">             </p></div>
    </div> <div class="card-title">
        <a href="" class="bg-dark"><h3 class="card-title">Sexual Health  </h3></a>
        <div class="card-text"><p class="card-text">             </p></div>
    </div> <div class="card-title">
        <a href="" class="bg-dark"><h3 class="card-title"> Urology </h3></a>
        <div class="card-text"><p class="card-text">             </p></div>
    </div> <div class="card-title">








































</div>












<hr>

<div class="container-fluid padding bg-dark" style="color:white">
    <div class="row text-center ">
        <div class="col-md-4">
            <img src="../img/index.jpg">
            <hr class="bg-light">
            <p>01531-584509</p>
            <p>abdullahaltushar12@gmail.com</p>
            <p>chittagong</p>
        </div>
        <div class="col-md-4">
            <h3>our help time</h3>
            <hr class="bg-light">
            <p>8am -8pm</p>
            <p>01531-584509</p>
        </div>
        <div class="col-md-4">
            <h3>emergency contact</h3>
            <hr class="bg-light">
            <p>018aa-aaaaaa</p>
            <p>015aa-gggggg</p>
        </div>
    </div>




    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js">

    </script>

<!--    <script>-->
<!--        $(document).ready(function(){-->
<!---->
<!--            //Apply the datatables plugin to your table-->
<!--            $('#myTable').DataTable();-->
<!---->
<!--        });-->
<!--    </script>-->
    <script>
        $(document).ready(function(){

            //Apply the datatables plugin to your table
            $('#myNewTable').DataTable();

        });
    </script>

    <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
    </script>
</body>
</html>
