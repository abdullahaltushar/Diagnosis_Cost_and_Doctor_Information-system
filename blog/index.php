
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>page</title>
<!--    <link rel="stylesheet" href="../assets/css/style.css">-->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<!--    <link rel="stylesheet" href="https://maxcdin.bootstrapcd.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
<!--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<!--    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->
<!--    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<!--     Include the above in your HEAD tag ---------->
<!---->
<!--    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>-->
<!---->
<!--    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>-->
<!--    <script src="../assets/js/bootstrap.js"></script>-->
<!--    mega--->
<!--    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>-->
<!--    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>-->
<!--    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<!---->
<!--    new-->
<!--    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<!--    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>-->
<!--    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
<!---->
<!--     Need to use datatables.net -->
<!--    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>-->
    <!--- new--->
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

    <!--    </nav>-->
   <?php include 'nav.php' ?>
    <!---section---->
    <div>
    <h1 class="gv ml-auto mr-auto text-success font-weight-bold" style="font-size:30px;">Government diagnostic cost </h1>


    <?php
    $hostname='localhost';
    $username='root';
    $password='';
    $dbname='doctor';
    $connection=mysqli_connect($hostname,$username,$password);
    if($connection){
        // echo'server connect';
        $db_select=mysqli_select_db($connection,$dbname);
        if($db_select){
//            echo'select';

        }
        else{
            die("data not selec".mysqli_error($db_select));
        }
    }
    else {

        die("sever not connect" . mysqli_error($connection));
    }
    $sql="SELECT * FROM  govt_tb_1";
    if(mysqli_query($connection,$sql)){
        $resource_id=mysqli_query($connection,$sql);
    }

    ?>
<!--        <div class="container" style="width: 800px">-->
<!--        <div class="row" style="margin: 50px">-->
    <table align="center" class="table table-hover" id="myTable" style="border:solid 1px black">
        <thead class="thead-dark">
        <tr align="center" >
            <th class="slno" scope="col">S.no</th>
            <th class="testname" scope="col">Name of test</th>
            <th class="taka" scope="col">Taka</th>
        </tr>
        </thead>
        <tbody align="center">
        <?php while($result=mysqli_fetch_assoc($resource_id)){ ?>

            <tr>
                <td scope="row" ><?php  echo $result['serial_number'];?></td>
                <td><?php  echo $result['test_name'];?></td>
                <td><?php  echo $result['taka'];?></td>
            </tr>
        <?php } ?>
            </tbody>
    </table>
            </div>
<!--        </div>-->
<!--    </div>-->




    <section>
        <a href="doctor%20list.php" class="text-dark"><h3 class="card-title">DOCTOR List</h3></a>

            <div class="card-title">
                <a href="" class="bg-dark"><h3 class="card-title">Cardiology(কার্ডিওলজি)</h3></a>
                <div class="card-text"><p class="card-text">যাদের হৃদপিণ্ড বা সঞ্চালনের সমস্যা রয়েছে </p></div>
            </div>
        <div class="card-title">
            <a href="" class="bg-dark"><h3 class="card-title">Cardiology Surgery (কার্ডিওলজি সার্জারি)</h3></a>
            <div class="card-text"><p class="card-text">যাদের হৃদপিণ্ড বা সঞ্চালনের সমস্যা রয়েছে </p></div>
        </div>
<div class="card-title">
    <a href="" class="bg-dark"><h3 class="card-title"> medicine specialist (মেডিসিন বিশেষজ্ঞ)</h3></a>
    <div class="card-text"><p class="card-text">  শুধুমাত্র রোগীর রোগ সারানোর জন্য শুধুমাত্র ঔষুধের বিষয়ে বিশেষজ্ঞরা চিকিৎসা দিয়ে থাকেন।  </p></div>

</div>
        <div class="card-title">
            <a href="" class="bg-dark"><h3 class="card-title"> General Surgery(জেনারেল সার্জারি ) </h3></a>
            <div class="card-text"><p class="card-text"> রোগীদের উপর বিভিন্ন ধরণের শল্য চিকিত্সা এবং পদ্ধতিগুলি জুড়ে। </p></div>
        </div>
        <div class="card-title">
            <a href="" class="bg-dark"><h3 class="card-title">Gynecology(জিনেকোলজি)  </h3></a>
            <div class="card-text"><p class="card-text"> এন্ডোমেট্রিওসিস, বন্ধ্যাত্ব এবং অসংলগ্নতার মতো মহিলা মূত্রনালী এবং প্রজনন অঙ্গ সম্পর্কিত সমস্যাগুলি অনুসন্ধান করে   </p>
                </p></div>
        </div>
        <div class="card-title">
            <a href="" class="bg-dark"><h3 class="card-title"> Gastroenterology (গ্যাস্ট্রোএন্টেরোলজি) </h3></a>
            <div class="card-text"><p class="card-text">  হজম  গ্যাস্ট্রোইনটেস্টাইনাল রোগগুলির তদন্ত করে এবং তার চিকিৎসা করে।     </p></div>
        </div>
        <div class="card-title">
            <a href="" class="bg-dark"><h3 class="card-title">  neurosurgery(নিউরোসার্জরী )</h3></a>
            <div class="card-text"><p class="card-text"> অত্যন্ত জটিল নিউরো সমস্যারও দক্ষতার সাথে চিকিৎসা করে |ব্রেইন টিউমারের মত বিভিন্ন ধরনের নিউরো সার্জারী করা হয়ে থাকে    </p></div>
        </div>
        <div class="card-title">
            <a href="" class="bg-dark"><h3 class="card-title">  Nephrology (নেফ্রোলজি ) </h3></a>
            <div class="card-text"><p class="card-text">    বিভিন্ন কিডনি (রেনাল) সমস্যা এবং শর্তযুক্ত রোগীদের পর্যবেক্ষণ এবং মূল্যায়ন করে। </p></div>
        </div> <div class="card-title">
            <a href="" class="bg-dark"><h3 class="card-title"> Neurology (নিউরোলজি ) </h3></a>
            <div class="card-text"><p class="card-text">
                    নিউরোলজি, চিকিৎসা বিভাগের একটি শাখা যেখানে নার্ভাস সিস্টেম বা স্নায়ু তন্ত্র ও তার বিভিন্ন সমস্যা বা রোগ নিয়ে আলোচনা করা হয়ে থাকে ।    </p></div>
          <div class="card-title">
            <a href="" class="bg-dark"><h3 class="card-title">   Orthopaedics (অস্টিওপোরোসিস ) </h3></a>
            <div class="card-text"><p class="card-text">      ক্যালসিয়াম এর অভাব জনিত একটা রোগ       </p></div>
        </div>  <div class="card-title">
            <a href="" class="bg-dark"><h3 class="card-title"> Physiotherapy (ফিজিওথেরাপি ) </h3></a>
            <div class="card-text"><p class="card-text">        ফিজিওথেরাপিস্টরা শারীরিক থেরাপির মাধ্যমে যেমন ব্যায়াম, ম্যাসেজ এবং হাড়, জয়েন্ট এবং পেশী টিস্যুগুলির হেরফের করে কাজ করে।     </p></div>
        </div>  <div class="card-title">
            <a href="" class="bg-dark"><h3 class="card-title">Radiotherapy (রেডিওথেরাপি)  </h3></a>
            <div class="card-text"><p class="card-text">
                    একে রেডিয়েশন থেরাপিও বলা হয়, এটি আয়নাইজিং রেডিয়েশনের সাথে ক্যান্সার এবং অন্যান্য রোগের চিকিত্সা।       </p></div>
        </div> <div class="card-title">
            <a href="" class="bg-dark"><h3 class="card-title"> Renal (রেনাল) </h3></a>
            <div class="card-text"><p class="card-text">  পেরিটোনাল ডায়ালাইসিসের জন্য সুবিধা সরবরাহ করে এবং হোম হেমোডায়ালাইসিসকে সহজতর করতে সহায়তা করে।           </p></div>
        </div>  <div class="card-title">
            <a href="" class="bg-dark"><h3 class="card-title">Sexual Health ( যৌন স্বাস্থ্য)  </h3></a>
            <div class="card-text"><p class="card-text">  যৌন সংক্রমণ, পরিবার পরিকল্পনার যত্ন, গর্ভাবস্থা পরীক্ষা এবং পরামর্শ, যৌন এবং যৌনাঙ্গজনিত সমস্যার জন্য যত্ন এবং সহায়তা প্রদানের জন্য পরামর্শ, পরীক্ষা ও চিকিত্সা সরবরাহ করে।           </p></div>
        </div>



    </section>

    <hr>
    <hr>
    <div class="card-title"><h1 class="text-dark"><a href="" class="text-dark">Hospital list</a> </h1></div>
    <div class="card-body">
        হাসপাতাল বলতে এক ধরণের চিকিৎসা প্রতিষ্ঠানকে বোঝায়। হাসপাতালের উদ্ভাবন করে মুসলিমরা। বর্তমানে হাসপাতাল বলতে এমন প্রতিষ্ঠানকে বোঝায় যেখানে বিশেষজ্ঞ চিকিৎসকগণ ও সেবাকর্মীগণ প্রয়োজনীয় উপকরণের মাধ্যমে রোগীদের সেবা প্রদান করেন। অনেক সময়েই হাসপাতালে রোগীর দীর্ঘমেয়াদী চিকিৎসার জন্য আবাসিক শয্যার ব্যবস্থাও থাকে। হাসপাতালসমূহ সরকারী, বেসরকারী (দাতব্য কিংবা মূনাফাভিত্তিক) অথবা বীমা প্রতিষ্ঠান দ্বারা পরিচালিত হতে পারে। প্রাচীনকালে ধর্মীয় প্রতিষ্ঠানসমূহ হাসপাতাল পরিচালনার কাজে নিয়মিত নিয়োজিত থাকতেন। বর্তমানে সারা বিশ্বে আনুমানিক ১৭০০০ হাসপাতাল রয়েছে।
    </div>

    <hr>


<div class="card-title"><h1 class="text-dark"><a href="" class="text-dark">Diagnostic center</a> </h1></div>
    <div class="card-body">
        <ul class="list-group-horizontal">
         <li class="list-group-item-danger bg-white" >
            <a class="text-success" href="#">Popular Diagnostic Center Ltd.</a>
         </li>
        <li class="list-group-item-danger bg-white" >
            <a class="text-success " href="#">CSCR (Pvt.) Ltd.</a>
        </li>
        <li class="list-group-item-danger bg-white" >
            <a class="text-success" href="#">Max Diagnostic Center</a>
        </li>
        <li class="list-group-item-danger bg-white" >
            <a class=" text-success" href="#">Life Care Diagnostic Center</a>
        </li>
        <li class="list-group-item-danger bg-white" >
            <a class=" text-success" href="#">Metro Diagnostic Center Limited</a>
        </li>
        <li class="list-group-item-danger bg-white" >
            <a class="text-success" href="#">Chittagong Bellevue Limited</a>
        </li>
        </ul>
        <ul class="list-group-horizontal ">
            <li class="list-group-item-danger bg-white">
                <a class="text-success" href="#">Woodland Diagnostic Center</a>
            </li>
            <li class="list-group-item-danger bg-white">
                <a class=" text-success" href="#">Lanset Diagnostic Center</a>
            </li>
            <li class="list-group-item-danger bg-white">
                <a class=" text-success" href="#">Mount Diagnostic Center</a>
            </li>
            <li class="list-group-item-danger bg-white">
                <a class="text-success" href="#">Life Line Diagnostic Center</a>
            </li>
            <li class="list-group-item-danger bg-white">
                <a class="text-success" href="#">Doctor's Lab</a>
            </li>
            <li class="list-group-item-danger bg-white">
                <a class=" text-success" href="#">Madison Medical Service Ltd.</a>
            </li>
        </ul>
        <ul class="list-group-horizontal">
            <li class="list-group-item-danger bg-white">
                <a class="text-success" href="#">Unicare Health Centre</a>
            </li>
            <li class="list-group-item-danger bg-white">
                <a class="text-success" href="#">Sensiv Pvt. Ltd.</a>
            </li>
            <li class="list-group-item-danger bg-white">
                <a class="text-success" href="#">Sheba Diagnostic Center</a>
            </li>
            <li class="list-group-item-danger bg-white ">
                <a class="text-success" href="#">Alpha Medical centre</a>
            </li>
            <li class="list-group-item-danger bg-white ">
                <a class="text-success" href="#">Organ Diagnostic Center</a>
            </li>
            <li class="list-group-item-danger bg-white">
                <a class="text-success" href="#">Lake City Diagnostic Center</a>
            </li>
        </ul>
    </div>

<hr>
    <hr>
    <div class="card-title"><h1 class="text-dark"><a href="" class="text-dark">Ambulance Service</a> </h1> </div>
    <img src="../img/Screenshot%20(5).png" class="img-fluid" alt="Responsive image">

<hr>
    <div class="card-title"><h1 class="text-dark"><a href="" class="text-dark">Blood Bank</a></h1>

    </div>


    <hr>
    <div class="card-title"><h1 class="text-dark"><a href="" class="text-dark">Health Trips</a> </h1>
    </div>


    <hr>

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