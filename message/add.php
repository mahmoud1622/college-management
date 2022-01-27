<?php 
ob_start();
include '../shared/header.php';
include '../shared/nav.php'; 
include '../genral/config.php';
include '../genral/function.php';

if(isset($_POST['send'])){
    $question= $_POST['question'];
    $answer= $_POST['answer'];
 $insert="INSERT INTO `message` VALUES(null, '$question' , '$answer') ";  
   $i= mysqli_query($iconn ,$insert );
   
   
    }
    $question="";
    $answer="";
    $updata=false;
    if(isset( $_GET['edit'])){
        $updata=true;
        $id= $_GET['edit'];
        $select= "SELECT * FROM `message` where id=$id " ;// select into input
        $ss=mysqli_query($iconn ,$select );
      $row=  mysqli_fetch_assoc($ss);
    $question= $row['question'];
    $answer= $row['answer'];
    if(isset($_POST['update']))
    {
        $question= $_POST['question'];
        $answer= $_POST['answer'];
    $update="UPDATE `message` SET question='$question' , answer='$answer'   where id=$id";  
    mysqli_query($iconn ,$update);
    header("location: /uni/message/add.php");
    }
    
    }
    
    ob_end_flush();
?>

<?php if($updata) : ?>
    <h1 class="text-center text-info">Updata Message :<?php echo $id ?> </h1>
                <?php else: ?>
                    <h1 class="text-center text-info">Add Message Page</h1>
                <?php endif; ?>


<div class="container col-md-6 text-center">
       <div class="card">
           <div class="card-body">

               <form action="" method="POST" enctype="multipart/form-data">
                   <div action="" class="form-group">
                       <label for="">Enter Question</label>
                         <input value="<?php echo $question ?>" name="question" type="text" class="form-control">
                    </div>
                    <div action="" class="form-group">
                    <?php if($_SESSION['role']==0 || $_SESSION['role']==1 ): ?>
                       <label for="">Enter Answer</label>
                         <input value="<?php echo $answer ?>" name="answer" type="text" class="form-control">
                         <?php endif ; ?>
                    </div>
                    <?php if($updata) : ?>
                <button name="update" class="btn btn-primary"> Updata data</button>
                <?php else: ?>
                <button name="send" class="btn btn-info"><i class="fas fa-paper-plane" style="font-size: 25px;"></i>Send data</button>
                <?php endif; ?>
               </form>
           </div>
       </div>
   </div> 


<?php include '../shared/script.php'?>
