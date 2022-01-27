<?php include '../shared/header.php';
include '../shared/nav.php'; 
include '../genral/config.php';
include '../genral/function.php';
if($_SESSION['role']==0 ){

if(isset($_POST['signup'])){
    $name=$_POST['name'] ;
    $password=$_POST['password'] ;
    $role =$_POST['role'];
  $insert="INSERT INTO `admin` VALUES (NULL , '$name','$password',$role ) "; 
 $i =mysqli_query($iconn,$insert);
 testmessage($i,"Insert Admin" );
}


?>
 <h1 class="text-center text-info ">Add Admins Page</h1>


<div class="container col-md-6 text-center">
       <div class="card">
           <div class="card-body">

               <form action="" method="POST">
                   <div action="" class="form-group">
                       <label for="">Name</label>
                         <input name="name" type="text" class="form-control">
                    </div>
                    <div action="" class="form-group">
                       <label for="">Password</label>
                         <input name="password" type="text" class="form-control">
                    </div>
                    <div action="" class="form-group">
                     All Access    <input type="radio" name="role" value="0">
                     Simi Access   <input type="radio" name="role" value="1">
                     Read Only    <input type="radio" name="role" value="2">
                    </div>
                  
                <button name="signup" class="btn btn-info"> Sign Up</button>
              
               </form>
           </div>
       </div>
   </div> 


<?php }
else{
    echo "<img src='https://t4.ftcdn.net/jpg/01/19/01/55/360_F_119015521_Tj5Ecrq8nV63wNXfs1iF2oj9kNNxHgya.jpg'>";
}
include '../shared/script.php'
?>
