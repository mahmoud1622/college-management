
<?php 
ob_start();
include '../shared/header.php';
include '../shared/nav.php'; 
include '../genral/config.php';
include '../genral/function.php';

$select= " SELECT * FROM registcourse  ";
$S=mysqli_query($iconn ,$select);

if(isset( $_GET['delete'])){
    $id= $_GET['delete'];
    $delete="DELETE FROM registcourse where id= $id ";
 $d= mysqli_query($iconn ,$delete );
 header("location: /uni/registcourse/list.php");// loading for page when delete
 }

 
 ob_end_flush();

?>

<h1 class="text-center text-info ">List Registcourse</h1>

<div class="container col-md-6 text-center">
       <div class="card">
           <div class="card-body">

           <table class="table table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Student ID</th>
                        <th>Course ID</th>
                        <?php if($_SESSION['role']==0 || $_SESSION['role']==1 ): ?>
                        <th>Action</th>
                        <?php endif ; ?>
                    </tr>
                   <?php foreach($S as $data){  ?>
                  <tr>
                  <th> <?php echo $data['id'] ?>    </th>
                        <th> <?php echo $data['StudentID'] ?>    </th>
                        <th> <?php echo $data['CourseID']  ?> </th>
                        <?php if($_SESSION['role']==0 || $_SESSION['role']==1 ): ?>
                        <th><a href="/uni/registcourse/list.php?delete=<?php echo $data['id'] ?> " class="btn btn-danger">Delete</a></th>
                        <?php endif ; ?>
                       
                    </tr>
                    <?php  }?> 
                  
                </table>
           </div>
       </div>
   </div> 


<?php include '../shared/script.php'?>
