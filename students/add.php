<?php 
ob_start();

 include '../shared/header.php';
include '../shared/nav.php'; 
include '../genral/config.php';
include '../genral/function.php';

if(isset($_POST['send'])){
    $name= $_POST['name'];
    $levelID= $_POST['levelID'];
//image code 
$type_image = $_FILES['image']['type'];
$name_image= $_FILES['image']['name'];
$tmp_name= $_FILES['image']['tmp_name'];
$location ='./upload/';
if(move_uploaded_file($tmp_name, $location .$name_image)){
    echo "true insert";
}else{
    echo "false insert";
}


 $insert="INSERT INTO students VALUES(NULL, '$name', '$name_image' , $levelID) ";  
 
   $i= mysqli_query($iconn ,$insert );
   
   
    }
    $name="";
    $levelID ="";
    $updata=false;
    if(isset( $_GET['edit'])){
        $updata=true;
        $id= $_GET['edit'];
        $select= "SELECT * FROM students where id=$id " ;// select into input
        $ss=mysqli_query($iconn ,$select );
      $row=  mysqli_fetch_assoc($ss);
    $name= $row['name'];
    $levelID= $row['levelID']; 
    if(isset($_POST['update']))
    {
        $name= $_POST['name'];
        $levelID = $_POST['levelID']; 
    $update="UPDATE students SET name='$name' , levelID = $levelID where id =$id";  
    mysqli_query($iconn ,$update);
    header("location:/uni/students/list.php");
    }
    
    } 
    //Select Levels
    $select= " SELECT * FROM levels  ";
    $ss=mysqli_query($iconn ,$select);
ob_end_flush();

?>

<?php if($updata) : ?>
    <h1 class="text-center text-info ">Updata Students :<?php echo $id ?> </h1>
                <?php else: ?>
                    <h1 class="text-center text-info ">Add Students Page</h1>
                <?php endif; ?>


<div class="container col-md-6 text-center">
       <div class="card">
           <div class="card-body">

               <form action="" method="POST" enctype="multipart/form-data">
                   <div action="" class="form-group">
                       <label for="">students name</label>
                         <input value="<?php echo $name ?>" name="name" type="text" class="form-control">
                    </div>
                    <div action="" class="form-group">
                       <label for="">students Image</label>
                         <input  name="image" type="file" class="form-control"> 
                    </div>
                    <div action="" class="form-group">
                       <label for="">students Level : <?php echo $levelID ?></label>
                         
                         <select name="levelID"  class="form-control">
                                <?php foreach($ss as $data){ ?>
                             <option value="<?php echo $data['id'] ?>"> <?php echo $data['year']  ?> </option>
                             <?php } ?>
                         </select>
                    </div>
                    <?php if($updata) : ?>
                <button name="update" class="btn btn-primary"> Updata data</button>
                <?php else: ?>
                <button name="send" class="btn btn-info"> <i class="fas fa-paper-plane" style="font-size: 25px;"></i> Send data</button>
                <?php endif; ?>
               </form>
           </div>
       </div>
   </div> 

<?php include '../shared/script.php'?>
