
<?php
ob_start();
include '../shared/header.php';
include '../shared/nav.php'; 
include '../genral/config.php';
include '../genral/function.php';

$select= " SELECT * FROM `message`  ";
$S=mysqli_query($iconn ,$select);

if(isset( $_GET['delete'])){
    $id= $_GET['delete'];
    $delete="DELETE FROM `message` where id= $id ";
 $d= mysqli_query($iconn ,$delete );
 header("location: /uni/message/list.php");// loading for page when delete
 }

 
 ob_end_flush();

?>

<h1 class="text-center text-info ">List Message</h1>

<div class="container col-md-6 text-center">
       <div class="card">
           <div class="card-body">

           <table class="table table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Question</th>
                        <th>Answer</th>
                        <th>Action</th>
                        
                    </tr>
                   <?php foreach($S as $data){  ?>
                  <tr>
                        <th> <?php echo $data['id'] ?>    </th>
                        <th> <?php echo $data['question']  ?> </th>
                        <th> <?php echo $data['answer']  ?> </th>
                        <th><a href="/uni/message/list.php?delete=<?php echo $data['id'] ?> " class="btn btn-danger">Delete</a></th>
                        <?php if($_SESSION['role']==0 || $_SESSION['role']==1 ): ?>
                        <th><a href="/uni/message/add.php?edit=<?php echo $data['id'] ?> " class="btn btn-info">Reply</a></th> 
                        <?php endif ; ?>
                    </tr>
                    <?php  }?> 
                  
                </table>
           </div>
       </div>
   </div> 


<?php include '../shared/script.php'?>
