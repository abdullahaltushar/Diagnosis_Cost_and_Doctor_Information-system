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
$con=mysqli_connect('localhost','root','','doctor');
$sql="SELECT * FROM `govt_tb_1`";
mysqli_select_db($con,'doctor');
$query=mysqli_query($con,$sql);
if($query){
    echo "select";
    $resource_id=mysqli_query($con,$sql);

}
else{
    die("no".mysqli_error($con));
}

?>

<html>
<head>
    <title>veiw</title>
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
<a href="index.php">Add information</a>
<table id="dtBasicExample" align="center" border="1" class="table table-striped table-bordered table-sm">
    <thead class="thead-dark">
    <tr align="center">
        <th>serial no</th>
        <th>Name of test</th>
        <th>Taka</th>
        <th scope="col">Delete</th>
        <th scope="col">Edit</th>
    </tr>
    </thead>
    <tbody>
<?php while($result=mysqli_fetch_assoc($resource_id)){ ?>
    <tr align="center">
        <td><?php  echo $result['serial_number'];?></td>
        <td><?php  echo $result['test_name'];?></td>
        <td><?php  echo $result['taka'];?></td>
        <td><button class="btn-danger btn"><a href="cost-delete.php?id=<?php echo $result['id']; ?>" class="text-white">Delete</a></button></td>
        <td><button class="btn-success btn"><a href="cost-update.php?id=<?php echo $result['serial_number']; ?>" class="text-white">Update</a></button></td>

    </tr>
    <?php } ?>
    </tbody>
</table>
<script>
    $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>
</body>
</html>
