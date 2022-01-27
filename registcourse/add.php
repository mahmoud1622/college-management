<?php 
ob_start();
include '../shared/header.php';
include '../shared/nav.php'; 
include '../genral/config.php';
include '../genral/function.php';

if(isset($_POST['send'])){
    $studID= $_POST['studID'];
    $courID= $_POST['courID'];

    
 $insert="INSERT INTO registcourse VALUES(null, $studID,$courID ) ";  
   $i= mysqli_query($iconn ,$insert );
   
   
    }
   
    // Select Students
    $selectST= "SELECT * FROM students  ";
    $students=mysqli_query($iconn ,$selectST );
    // Select courses
    $selectCR= "SELECT * FROM courses  " ;
    $courses=mysqli_query($iconn ,$selectCR );
    ob_end_flush();
?>

 <h1 class="text-center text-info ">Add Registcourse Page</h1>



<div class="container col-md-6 text-center">
       <div class="card">
           <div class="card-body">

               <form action="" method="POST">
                   <div action="" class="form-group">
                       <label for="">students ID </label>
                         
                         <select name="studID"  class="form-control">
                                <?php foreach($students as $data){ ?>
                             <option value="<?php echo $data['id'] ?>"> <?php echo $data['name']  ?> </option>
                             <?php } ?>
                         </select>
                    </div>
                    <div action="" class="form-group">
                       <label for="">Courses ID </label>
                         
                         <select name="courID"  class="form-control">
                                <?php foreach($courses as $data){ ?>
                             <option value="<?php echo $data['id'] ?>"> <?php echo $data['name']  ?> </option>
                             <?php } ?>
                         </select>
                    </div>
            
                <button name="send" class="btn btn-info"> <i class="fas fa-paper-plane" style="font-size: 25px;"></i> Send data</button>
               
               </form>
           </div>
       </div>
   </div> 


<?php include '../shared/script.php'?>
