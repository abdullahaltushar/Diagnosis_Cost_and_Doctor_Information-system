<?php
session_start();
if($_SESSION['id'] == null){
    header('Location: index.php');
}
require_once '../Apps/classes/Database.php';
require_once '../Apps/classes/Login.php';
$login = new \App\classes\Login();
if(isset($_GET['logout'])){
    $login ->adminLogout();
}
?>
<html>
<head>
    <title>sensiv</title>
    <link rel="stylesheet" href="../asset/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../asset/js/bootstrap.js"></script>
</head>
<body>
<?php include 'menu.php'  ?>
<h4 align="center"><a class="text-success" href="addsensiv.php">ADD SINSIV</a></h4>
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
$sql="SELECT * FROM  sheba";
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
        <th scope="col">Delete</th>
        <th scope="col">Edit</th>
    </tr>
    </thead>
    <tbody>
    <?php while($result=mysqli_fetch_assoc($resource_id)){ ?>

        <tr align="center">
            <td scope="row" ><?php  echo $result['id'];?></td>
            <td><?php  echo $result['test_name'];?></td>
            <td><?php  echo $result['taka'];?></td>
            <td><button class="btn-danger btn"><a href="sheba_delete.php?id=<?php echo $result['id']; ?>" class="text-white">Delete</a></button></td>
            <td><button class="btn-success btn"><a href="sheba_update.php?id=<?php echo $result['id']; ?>" class="text-white">Update</a></button></td>

        </tr>
    <?php } ?>
    </tbody>
</table>
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
<!--        </div>-->
<!--    </div>-->













