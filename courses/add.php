<?php
ob_start();
include '../shared/header.php';
include '../shared/nav.php'; 
include '../genral/config.php';
include '../genral/function.php';

if(isset($_POST['send'])){
    $name= $_POST['name'];
 $insert="INSERT INTO courses VALUES(null, '$name') ";  
   $i= mysqli_query($iconn ,$insert );
   
   
    }
    $name="";

    $updata=false;
    if(isset( $_GET['edit'])){
        $updata=true;
        $id= $_GET['edit'];
        $select= "SELECT * FROM courses where id=$id " ;// select into input
        $ss=mysqli_query($iconn ,$select );
      $row=  mysqli_fetch_assoc($ss);
    $name= $row['name'];
    
    if(isset($_POST['update']))
    {
        $name= $_POST['name'];
    $update="UPDATE courses SET name='$name' where id=$id";  
    mysqli_query($iconn ,$update);
    header("location:/uni/courses/list.php");
    }
    
    }
    ob_end_flush();

?>

<?php if($updata) : ?>
    <h1 class="text-center text-info ">Updata Courses :<?php echo $id ?> </h1>
                <?php else: ?>
                    <h1 class="text-center text-info ">Add Courses Page</h1>
                <?php endif; ?>


<div class="container col-md-6 text-center">
       <div class="card">
           <div class="card-body">

               <form action="" method="POST">
                   <div action="" class="form-group">
                       <label for="">Courses name</label>
                         <input value="<?php echo $name ?>" name="name" type="text" class="form-control">
                    </div>
                    <?php if($updata) : ?>
                <button name="update" class="btn btn-primary"> Updata data</button>
                <?php else: ?>
                <button name="send" class="btn btn-info"><i class="fas fa-paper-plane" style="font-size: 25px;"></i> Send data</button>
                <?php endif; ?>
               </form>
           </div>
       </div>
   </div> 


<?php include '../shared/script.php'?>
