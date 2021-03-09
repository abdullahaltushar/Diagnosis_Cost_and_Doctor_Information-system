<?php
$blog_id=$_GET['blog_id'];
echo $blog_id;
function select_blog_info_by_id($blog_id)
{
    //connection
    $hostname='localhost';
    $username='root';
    $password='';
    $dbname='db_my';
    $connection=mysqli_connect($hostname,$username,$password);
    if($connection){
        // echo'server connect';
        $db_select=mysqli_select_db($connection,$dbname);
        if($db_select){
            echo'select';

        }
        else{
            die("data not selec".mysqli_error($db_select));
        }
    }
    else {

        die("sever not connect" . mysqli_error($connection));
    }

//work
    $sql="SELECT * FROM tb_my WHERE blog_id='$blog_id'";
  if(mysqli_query($connection,$sql)){
      $query=mysqli_query($connection,$sql);
      return $query;
  }
  else{
      die('query plm'.mysqli_error($connection));
  }






}

   $query=select_blog_info_by_id($blog_id);

 $resource_id=mysqli_fetch_assoc($query);


 //update
if(isset($_POST['btn'])){
    function update_blog($data){
        //concet
        $hostname='localhost';
        $username='root';
        $password='';
        $dbname='db_my';
        $connection=mysqli_connect($hostname,$username,$password);
        if($connection){
            // echo'server connect';
            $db_select=mysqli_select_db($connection,$dbname);
            if($db_select){
                echo'select';

            }
            else{
                die("data not selec".mysqli_error($db_select));
            }
        }
        else {

            die("sever not connect" . mysqli_error($connection));
        }




        $sql="UPDATE tb_my SET blog_title='$data[blog_title]',author_name='$data[author_name]',blog_description='$data[blog_description],publication_statu='$data[publication_status]";
       if (mysqli_query($connection,$sql)){
           header("Location: veiw.php");
       }
       else{
           die('query plm'.mysqli_error($connection));
       }

    }
    update_blog($_POST);
}





















?>
<html>
<head>
    <title>new </title>
</head>
<body>
<hr/>
<a href="veiw.php">veiw information</a>
<a href="index.php">add information</a>
<hr/>
<form action="" method="post">
    <table align="center">
        <tr>
            <td> Blog title </td>
            <td>
                <input type="text" name="blog_title" value="<?php echo $resource_id['blog_title']; ?>">
                <input type="hidden" name="blog_title" value="<?php echo $resource_id['blog_id']; ?>">
            </td>
        </tr>
        <tr>
            <td> Author name </td>
            <td> <input type="text" name="author_name" value="<?php echo $resource_id['autjor_name']; ?>"></td>
        </tr>
        <tr>
            <td> blog description</td>
            <td >
                <textarea name="blog_description">
                    <?php echo $resource_id['blog_description'];?>
                </textarea>
            </td>
        </tr>
        <tr>
            <td> publication status </td>
            <td><select name="publication_status">
                    <option >-----status ----</option>
                    <option value="1">publication</option>
                    <option value="0"> unpublication</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td ><input type="submit" name="btn" value="update"></td>
        </tr>
    </table>
</form>
</body>
</html>

