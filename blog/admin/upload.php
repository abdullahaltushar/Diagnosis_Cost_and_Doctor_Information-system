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
<html>
<head>
    <title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

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
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center text-white bg-dark"> profile</h1>
    <div class="table-responsive">
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
                $displayQuery = "select * from doctorlist_tb WHERE category='cardiology'";
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
        <script>
            $(document).ready(function(){

                //Apply the datatables plugin to your table
                $('#myNewTable').DataTable();

            });
        </script>
    </div>
</div>


</body>
</html>
