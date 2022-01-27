
<?php
ob_start();
include '../shared/header.php';
include '../shared/nav.php'; 
include '../genral/config.php';
include '../genral/function.php';

$select= " SELECT * FROM courses  ";
$S=mysqli_query($iconn ,$select);

if(isset( $_GET['delete'])){
    $id= $_GET['delete'];
    $delete="DELETE FROM courses where id= $id ";
 $d= mysqli_query($iconn ,$delete );
 header("location: /uni/courses/list.php");// loading for page when delete
 }

 ob_end_flush();
?>

<h1 class="text-center text-info ">List Courses</h1>

<div class="container col-md-6 text-center">
       <div class="card">
           <div class="card-body">

           <table class="table table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <?php if($_SESSION['role']==0 || $_SESSION['role']==1 ): ?>
                        <th>Action</th>
                        <?php endif ; ?>
                    </tr>
                   <?php foreach($S as $data){  ?>
                  <tr>
                        <th> <?php echo $data['id'] ?>    </th>
                        <th> <?php echo $data['name']  ?> </th>
                        <?php if($_SESSION['role']==0 || $_SESSION['role']==1 ): ?>
                        <th><a href="/uni/courses/list.php?delete=<?php echo $data['id'] ?> " class="btn btn-danger">Delete</a></th>
                        <th><a href="/uni/courses/add.php?edit=<?php echo $data['id'] ?> " class="btn btn-info">Edit</a></th> 
                        <?php endif ; ?>
                    </tr>
                    <?php  }?> 
                  
                </table>
           </div>
       </div>
   </div> 


<?php include '../shared/script.php'?>
